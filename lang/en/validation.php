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

    'accepted' => ':atribute :трябва да бъде приет.',
    'accepted_if' => ':atribute :трябва да бъде приет, когато :other е :value.',
    'active_url' => ':atribute :не е валиден URL адрес.',
    'after' => ':atribute :трябва да е дата след :date.',
    'after_or_equal' => ':atribute :трябва да е дата след :date или да е равен на :date.',
    'alpha' => ':atribute :трябва да съдържа само букви.',
    'alpha_dash' => ':atribute :трябва да съдържа само букви, цифри, тирета и долна черта.',
    "alpha_num" => ":atribute :трябва да съдържа само букви и цифри.",
    'array' => ':atribute :трябва да е масив.',
    'before' => ':atribute :трябва да е дата преди :date.',
    'before_or_equal' => ':atribute трябва да е дата преди или равен на :date.',
    'between' => [
        'array' => ":atribute :трябва да има между :min и :max елементи",
        'file' => ":atribute :трябва да е между :min и :max килобайта.",
        'numeric' => ':atribute :трябва да е между :min и :max',
        "string" => ":atribute трябва да бъде между :min и :max символи.",
    ],
    'boolean' => 'Полето :attribute трябва да е true или false.',
    'confirmed' => 'Потвърждението на :attribute не съвпада.',
    'current_password' => 'Паролата е неправилна.',
    'date' => ':atribute :не е валидна дата.',
    'date_equals' => ':atribute :трябва да е дата, равна на :date.',
    'date_format' => ':atribute :date не съответства на формата :format.',
    'declined' => ':atribute :трябва да бъде отказан.',
    'declined_if' => ':atribute :трябва да бъде отказан, когато :other е :value.',
    'different' => ':atribute :и :other трябва да са различни.',
    'digits' => ':atribute трябва да е :digits digits.',
    'digits_between' => ':atribute трябва да е между :min и :max цифри.',
    'dimensions' => ':atribute :има невалидни размери на изображението.',
    "distinct" => "Полето :attribute има дублирана стойност.",
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => ':atribute :трябва да е валиден имейл адрес.',
    'ends_with' => ':atribute :трябва да завършва с едно от следните: :values.',
    'enum' => 'Избраният ::atribute е невалиден.',
    'exists' => 'Избраният ::atribute е невалиден.',
    'file' => 'Избраният ::atribute трябва да е файл.',
    'filled' => 'Полето :attribute трябва да има стойност.',
    'gt' => [
        'array' => 'Полето :attribute трябва да има повече от :value елементи.',
        'file' => ':atribute :трябва да е по-голям от :value килобайта.',
        'numeric' => ':atribute трябва да е по-голям от :value.',
        "string" => ":atribute :трябва да е по-голям от :value символи.",
    ],
    'gte' => [
        'array' => ':attribute трябва да има елементи :value или повече.',
        'file' => ':atribute :трябва да е по-голям или равен на :value килобайта.',
        'numeric' => ':atribute трябва да е по-голям или равен на :value.',
        "string" => ":atribute :трябва да е по-голям или равен на :value символи.",
    ],
    'image' => ':atribute :трябва да е изображение.',
    'in' => 'Избраният ::atribute е невалиден.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => ':atribute :трябва да е цяло число.',
    'ip' => ':atribute :трябва да е валиден IP адрес.',
    "ipv4" => ":atribute :трябва да е валиден IPv4 адрес.",
    "ipv6" => ":atribute :трябва да е валиден IPv6 адрес.",
    'json' => ':atribute :трябва да е валиден JSON низ.',
    'lt' => [
        'array' => ':atribute :трябва да има по-малко от :value елементи.',
        'file' => ':atribute :трябва да е по-малък от :value килобайта.',
        'numeric' => ':atribute трябва да е по-малък от :value.',
        "string" => ":atribute :трябва да е по-малък от :value символи.",
    ],
    'lte' => [
        'array' => ':atribute :трябва да има не повече от :value елементи.',
        'file' => ':atribute трябва да е по-малък или равен на :value килобайта.',
        'numeric' => ':atribute :трябва да е по-малък или равен на :value.',
        "string" => ":atribute :трябва да е по-малък или равен на :value символи.",
    ],
    'mac_address' => ':atribute :трябва да е валиден MAC адрес.',
    'max' => [
        'array' => ':atribute не трябва да съдържа повече от :max елементи.',
        'file' => ':atribute не трябва да е по-голям от :max килобайта.',
        'numeric' => ':atribute не трябва да е по-голям от :max.',
        'string' => ':atribute :не трябва да е по-голям от :max символи.',
    ],
    'mimes' => ':atribute :трябва да е файл от тип: :values.',
    'mimetypes' => ':atribute :трябва да е файл от тип: :values.',
    'min' => [
        'array' => ':atribute трябва да има поне :min елементи.',
        'file' => ':atribute трябва да има поне :min килобайта.',
        'numeric' => ':atribute трябва да е поне :min.',
        'string' => ':atribute :трябва да съдържа поне :min символа.',
    ],
    'multiple_of' => 'Атрибутът :attribute трябва да е кратен на :value.',
    'not_in' => 'Избраният :атрибут е невалиден.',
    'not_regex' => 'Форматът на :atribute е невалиден.',
    'numeric' => 'Атрибутът трябва да е число.',
    'password' => [
        'letters' => 'Атрибутът трябва да съдържа поне една буква.',
        "mixed" => "Атрибутът :трябва да съдържа поне една главна и една малка буква.",
        "numbers" => "Атрибутът :трябва да съдържа поне едно число.",
        'symbols' => 'Атрибутът :трябва да съдържа поне един символ.',
        'uncompromised' => 'Даденият :attribute се е появил при изтичане на данни. Моля, изберете друг :atribute.',
    ],
    'present' => 'Полето на :attribute трябва да е налично.',
    'prohibited' => 'Полето :attribute е забранено.',
    'prohibited_if' => 'Полето на :attribute е забранено, когато :other е :value.',
    'prohibited_unless' => 'Полето :attribute е забранено, освен ако :other е в :values.',
    'prohibits' => 'Полето :attribute забранява присъствието на :other.',
    'regex' => 'Форматът на :attribute е невалиден.',
    'required' => 'Полето :attribute е задължително.',
    'required_array_keys' => 'Полето :attribute трябва да съдържа записи за: :values.',
    'required_if' => 'Полето :attribute е задължително, когато :other е :value.',
    'required_unless' => 'Полето за :атрибут е задължително, освен ако :other е в :values.',
    'required_with' => 'Полето :attribute е задължително, когато присъства :values.',
    'required_with_all' => 'Полето :attribute е задължително, когато има :values.',
    'required_without' => 'Полето :attribute е задължително, когато :values не присъства.',
    "required_without_all" => "Полето :attribute е задължително, когато не присъства нито една от :values.",
    'same' => 'Полетата :attribute и :other трябва да съвпадат.',
    'size' => [
        'array' => 'Атрибутът :attribute трябва да съдържа елементи :size.',
        'file' => 'Атрибутът :size трябва да е :size килобайта.',
        'numeric' => 'Атрибутът :size трябва да бъде :size.',
        'string' => 'Атрибутът :size трябва да е :size символи.',
    ],
    'starts_with' => ':attribute трябва да започва с едно от следните числа: :values.',
    'string' => ':attribute трябва да бъде низ.',
    'timezone' => ':attribute трябва да бъде валиден часови пояс.',
    'unique' => ':attribute вече е бил използван.',
    'uploaded' => ':attribute не е успял да се качи.',
    'url' => ':attribute трябва да е валиден URL адрес.',
    'uuid' => ':attribute трябва да е валиден UUID.',
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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
