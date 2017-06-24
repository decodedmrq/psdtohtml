<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted' => ':attribute phải được chấp nhận.',
    'active_url' => ':attribute không phải là một URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau :date',
    'after_or_equal' => ':attribute phải là ngày tháng sau hoặc bằng :date',
    'alpha' => ':attribute chỉ có thể chứa chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num' => ':attribute chỉ có thể chứa chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'before' => ':attribute phải là ngày trước :date.',
    'before_or_equal' => ':attribute phải là ngày trước hoặc bằng :date',

    'between' => [
        'numeric' => ':attribute phải nằm giữa :min và :max.',
        'file' => ':attribute phải nằm trong khoảng :min và :max Kb.',
        'string' => ':attribute phải ở giữa :min và :max ký tự',
        'array' => ':attribute phải có từ :min đến :max mục',
    ],

    'boolean' => ':attribute phải là true hoặc false.',
    'confirmed ' => ' :attribute confirmation không khớp.',
    'date' => ':attribute không phải là ngày hợp lệ.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'different' => ':attribute và :other phải là khác nhau.',
    'digits' => ':attribute phải là :digits.',
    'digits_between' => ':attribute phải nằm giữa :min và :max số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => ':attribute có một giá trị trùng lặp.',
    'email' => ':attribute phải là một địa chỉ email hợp lệ.',
    'exists' => ':attribute đã chọn không hợp lệ.',
    'file' => ':attribute phải là một tập tin.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => ':attribute phải là một số nguyên.',
    'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
    'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max' => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file' => ':attribute không được lớn hơn :max Kb.',
        'string' => ':attribute không được lớn hơn :max ký tự.',
        'array' => ':attribute không có nhiều hơn :max mục.',
    ],
    'mimes' => ':attribute phải là một tập tin kiểu :values.',
    'mimetypes' => ':attribute phải là một tập tin của loại :values.',
    'min' => [
        'numeric' => ':attribute phải có ít nhất là :min.',
        'file' => ':attribute phải có ít nhất :min Kb.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
        'array' => ':attribute phải có ít nhất :min mục',
    ],
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'present' => 'Trường :attribute phải có.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => ':attribute không được bỏ trống',
    'required_if' => ':attribute được yêu cầu khi :other là :value.',

    'required_unless' => ':attribute bắt buộc trừ khi :other thuộc :values.',
    'required_with' => ':attribute bắt buộc khi có :values.',
    'required_with_all' => ':attribute bắt buộc khi có :values.',

    'required_without' => ':attribute bắt buộc khi không có :values.',
    'required_without_all' => ':attribute bắt buộc khi không có tất cả :values.',
    'same' => ':attribute và :other phải khớp.',
    'size' => [
        'numeric' => ':attribute phải là :size.',
        'file' => ':attribute phải là :size Kb.',
        'string' => ':attribute phải là :size ký tự.',
        'array' => ':attribute phải chứa :size mục.',
    ],
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là một khu vực hợp lệ.',
    'unique' => ':attribute đã được dùng rồi',
    'uploaded' => 'Không thể upload :attribute.',
    'url' => 'Định dạng :attribute không hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'author' => [
            'required' => 'Vui lòng nhập tên',
        ],
        'email' => [
            'required' => 'Vui lòng nhập email',
            'email' => 'Vui lòng nhập email',
            'unique' => 'Email đã được sử dụng',
        ],
        'content' => [
            'required' => 'Vui lòng nhập nội dung',
        ],
        'g-recaptcha-response' => [
            'captcha' => 'Bạn chưa xác nhận Captcha',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
