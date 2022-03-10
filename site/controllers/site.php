<?php
return function ($kirby, $page) {

    if ($kirby->request()->is('POST') && get('submit')) {

        // initialize variables
        $alerts      = null;
        $attachments = [];

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        // get the data and validate the other form fields
        $data = [
            'name'      => get('name'),
            'email'     => get('email'),
            'company'     => get('company'),
            'mail'     => get('mail'),
            'from'     => get('from'),
            'tel'     => get('tel'),
            'location'     => get('location'),
            'message'   => get('message')
        ];

        $rules = [
            'message'   => ['required', 'min' => 1, 'max' => 3000],
        ];

        $messages = [
            'message'   => 'Please enter a text between 1 and 3000 characters.'
        ];

        // get the uploads
        $uploads = $kirby->request()->files()->get('file');

        // we want no more than 3 files
        if (count($uploads) > 3) {
            $alerts[] = 'Please upload max 3 files.';
        }

        if ($uploads[0]['error'] !== 4) {
            foreach ($uploads as $upload) {
                //  make sure there are no other errors  
                if ($upload['error'] !== 0) {
                    $alerts[] = 'The file could not be uploaded';
                // make sure the file is not larger than 2MB…    
                } elseif ($upload['size'] > 20000000)  {
                    $alerts[] = $upload['name'] . ' is larger than 20 MB';
                // …and the file is a PDF
                } elseif ($upload['type'] !== 'application/pdf') {
                    $alerts[] = $upload['name'] . ' is not a PDF';
                // all valid, try to rename the temporary file
                } else {
                    $name     = $upload['tmp_name'];
                    $tmpName  = pathinfo($name);
                    // sanitize the original filename
                    $filename = $tmpName['dirname']. '/'. F::safeName($upload['name']);
            
                    if (rename($upload['tmp_name'], $filename)) {
                        $name = $filename;
                    }
                    // add the files to the attachments array
                    $attachments[] = $name;
                }  
            }
        }

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alerts = $invalid;
        }



        // the data is fine, let's send the email with attachments
        if (empty($alerts)) {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => $data['from'],
                    'replyTo'  => $data['email'],
                    'to'       => $data['mail'],
                    'subject'     => esc($data['name']),
                    'data'        => [
                        'message'   => esc($data['message']),
                        'company'   => esc($data['company']),
                        'name'      => esc($data['name']),
                        'tel'      => esc($data['tel']),
                        'location'      => esc($data['location']),
                    ],
                    'attachments' => $attachments
                ]);
            } catch (Exception $error) {
                $error->getMessage();
            }

            // no exception occurred, let's send a success message
            if (empty($alerts) === true) {
                // redirect to the success page
                go('success');
            }
        }
    }

    // return data to template
    return [
        'alerts' => $alerts ?? null,
        'data'   => $data   ?? false,
    ];
};
