<?php

return [

    'name' => 'FormBuilder',
    /*
    |--------------------------------------------------------------------------
    | Entity NameSpace Default
    |--------------------------------------------------------------------------
    |
    | This option allows you to define what namespace all your models use.
    | This allows you to pass only the model name through, instead of a
    | fully qualified namespace for each model.
    |
    */
    'entity' => [
        'namespace' => 'App\\Models\\',
    ],
    /*
    |--------------------------------------------------------------------------
    | Default Field Labels
    |--------------------------------------------------------------------------
    |
    | This option allows you to define what labels to use as defaults based on
    | standard column name formats. Add or modify to fit your implementation.
    | To override these values on a per model basis, create an array in
    | your Model with the name of $formLabels
    |
    */
    'labels' => [
        'email'             => 'Email Address',
        'email2'            => 'Secondary Email Address',
        'first_name'        => 'First Name',
        'last_name'         => 'Last Name',
        'username'          => 'Username',
        'password'          => 'Password',
        'middle_initial'    => 'Middle Initial',
        'gender'            => 'Gender',
        'address1'          => 'Address',
        'address'           => 'Address',
        'address2'          => 'Address Continued',
        'city'              => 'City',
        'state'             => 'State',
        'zip'               => 'Zip Code',
        'country'           => 'Country',
        'phone'             => 'Phone Number',
        'fax'               => 'Fax Number',
        'dob'               => 'Date of Birth',
        'tos'               => 'Terms of Service',
        'name'              => 'Name'
    ],
    /*
    |--------------------------------------------------------------------------
    | Default mapping of column types to form types
    |--------------------------------------------------------------------------
    |
    | This option allows you to define the mapping of inputs field types    from
    | the schema to form input types. Example: Varchar is a string, so defaults
    | to Input etc. To override these values on a per model basis, create
    | an array in your Model with the name of $formInputs
    |
    */
    'inputs' => [
        'hidden'            => 'Hidden',
        'varchar'           => 'Input',
        'int'               => 'Input',
        'date'              => 'DateInput',
        'tinyint'           => 'CheckBox',
        'text'              => 'Text',
        'smallint'          => 'CheckBox'
    ],
    /*
    |--------------------------------------------------------------------------
    | Default Fields to skip populating on form
    |--------------------------------------------------------------------------
    |
    | This option allows you to define what fields/columns to ignore when
    | building out a form. To override these values on a per model basis,
    | create an array in your Model with the name of $skipFields
    |
    */
    'fields' => [
        'created_at',
        'deleted_at',
        'active',
        'updated_at',
        'permissions',
        'last_login',
        'password_date',
        'remember_token',
        'customer_id',
        'all',
    ],
];