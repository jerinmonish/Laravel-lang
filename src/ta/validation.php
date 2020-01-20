<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | இந்த following language lines contain இந்த default error messages used by
    | இந்த validator class. Some of இந்தse rules have multiple versions such
    | as இந்த size rules. Feel free to tweak each of இந்தse messages here.
    |
    */

    'accepted'        => ':attribute ஏற்றுக்கொள்ளப்பட வேண்டும்.',
    'active_url'      => ':attribute சரியான URL அல்ல.',
    'after'           => ':attribute, :date ஒரு தேதி இருக்க வேண்டும்.',
    'after_or_equal'  => ':attribute, :date அதற்குப் பிறகு அல்லது அதற்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'alpha'           => ':attribute எழுத்துக்களை மட்டுமே கொண்டிருக்க முடியும்.',
    'alpha_dash'      => ':attribute எழுத்துக்கள், எண்கள் மற்றும் கோடுகளை மட்டுமே கொண்டிருக்க முடியும்.',
    'alpha_num'       => ':attribute எழுத்துக்கள் மற்றும் எண்களை மட்டுமே கொண்டிருக்க முடியும்.',
    'array'           => ':attribute ஒரு வரிசை இருக்க வேண்டும்.',
    'before'          => ':attribute, :date இதற்கு முன் ஒரு தேதி இருக்க வேண்டும்.',
    'before_or_equal' => ':attribute, :date அதற்கு முன் அல்லது அதற்கு சமமான தேதி இருக்க வேண்டும்.',
    'between'         => [
        'numeric' => ':attribute, :min மற்றும் :max இடையில் இருக்க வேண்டும்',
        'file'    => ':attribute, :min மற்றும் :max கிலோபைட்டுகளுக்கு இடையில் இருக்க வேண்டும்.',
        'string'  => ':attribute, :min மற்றும் :max கதாபாத்திரங்களுக்கு இடையில் இருக்க வேண்டும்.',
        'array'   => ':attribute, :min மற்றும் :max உருப்படிகளுக்கு இடையில் இருக்க வேண்டும்.',
    ],
    'boolean'        => ':attribute புலம் உண்மை அல்லது தவறானதாக இருக்க வேண்டும்.',
    'confirmed'      => ':attribute உறுதிப்படுத்தல் பொருந்தவில்லை.',
    'date'           => ':attribute சரியான தேதி அல்ல.',
    'date_equals'    => ':attribute, :date சமமான தேதியாக இருக்க வேண்டும்.',
    'date_format'    => ':attribute வடிவம் :format பொருந்தவில்லை',
    'different'      => ':attribute மற்றும் :oஇந்தr வித்தியாசமாக இருக்க வேண்டும்.',
    'digits'         => ':attribute, :digits ஒரு எண்ணாக இருக்க வேண்டும்.',
    'digits_between' => ':attribute, :min மற்றும் :max இலக்கங்களுக்கு இடையில் இருக்க வேண்டும்.',
    'dimensions'     => ':attribute இன் தவறான மன அளவைக் கொண்டுள்ளது.',
    'distinct'       => ':attribute புலம் நகல் மதிப்பைக் கொண்டுள்ளது.',
    'email'          => ':attribute செல்லுபடியாகும் மின்னஞ்சல் முகவரியாக இருக்க வேண்டும்.',
    'ends_with'      => 'இந்த :attribute must end with one of இந்த following: :values',
    'exists'         => 'தேர்வு செய்யப்பட்டது :attribute தவறானது',
    'file'           => ':attribute ஒரு கோப்பு இருக்க வேண்டும்.',
    'filled'         => ':attribute புலம் தேவை.',
    'gt'             => [
        'numeric' => ':attribute, :value விட இருக்க வேண்டும்',
        'file'    => ':attribute, :value kilobytes விட இருக்க வேண்டும்',
        'string'  => ':attribute, :value characters விட இருக்க வேண்டும்',
        'array'   => ':attribute, :value உருப்படிக்கு மேல் இருக்க வேண்டும்',
    ],
    'gte' => [
        'numeric' => 'இந்த :attribute must be greater than அல்லது சமம் :value.',
        'file'    => 'இந்த :attribute must be greater than அல்லது சமம் :value கிலோபைட்டுகளை.',
        'string'  => 'இந்த :attribute must be greater than அல்லது சமம் :value எழுத்துக்கள்.',
        'array'   => 'இந்த :attribute must have :value items or more.',
    ],
    'image'    => ':attribute ஒரு படமாக இருக்க வேண்டும்.',
    'in'       => 'தேர்வு செய்யப்பட்டது :attribute தவறானது.',
    'in_array' => ':attribute புலம் இல்லை :other.',
    'integer'  => ':attribute ஒரு முழு எண் இருக்க வேண்டும்',
    'ip'       => ':attribute செல்லுபடியாகும் IP address இருக்க வேண்டும்',
    'ipv4'     => ':attribute செல்லுபடியாகும் IPv4 address இருக்க வேண்டும்',
    'ipv6'     => ':attribute செல்லுபடியாகும் IPv6 address இருக்க வேண்டும்',
    'json'     => ':attribute செல்லுபடியாகும் JSON சரம் இருக்க வேண்டும்',
    'lt'       => [
        'numeric' => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் :value.',
        'file'    => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் :value கிலோபைட்டுகளை.',
        'string'  => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் :value எழுத்துக்கள்.',
        'array'   => 'இந்த :attribute குறைவாக இருக்க வேண்டும் :value பொருட்களை.',
    ],
    'lte' => [
        'numeric' => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் அல்லது சமம் :value.',
        'file'    => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் அல்லது சமம் :value கிலோபைட்டுகளை.',
        'string'  => 'இந்த :attribute விட குறைவாக இருக்க வேண்டும் அல்லது சமம் :value எழுத்துக்கள்.',
        'array'   => 'இந்த :attribute விட அதிகமாக இருக்கக்கூடாது :value பொருட்களை.',
    ],
    'max' => [
        'numeric' => ':attribute, :max விட பெரியதாக இருக்க முடியாது.',
        'file'    => ':attribute :max கிலோபைட்டுகளை விட பெரிதாக இருக்க முடியாது.',
        'string'  => ':attribute, :max எழுத்துக்களை விட பெரிதாக இருக்க முடியாது.',
        'array'   => ':attribute, :max உருப்படிகளைத் தாண்டக்கூடாது.',
    ],
    'mimes'     => ':attribute ஒரு வகை கோப்பு: :values இருக்க வேண்டும்',
    'mimetypes' => ':attribute ஒரு வகை கோப்பு: :values இருக்க வேண்டும்',
    'min'       => [
        'numeric' => ':attribute குறைந்தது :min இருக்க வேண்டும்',
        'file'    => ':attribute குறைந்தது :min கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'string'  => ':attribute குறைந்தது :min ஒரு கதாபாத்திரமாக இருக்க வேண்டும்.',
        'array'   => ':attribute குறைந்தது :min உருப்படி இருக்க வேண்டும்.',
    ],
    'not_in'               => 'தேர்வு செய்யப்பட்டது :attribute தவறானது',
    'not_regex'            => ':attribute வடிவம் தவறானது.',
    'numeric'              => ':attribute ஒரு எண்ணாக இருக்க வேண்டும்.',
    'present'              => ':attribute புலம் இருக்க வேண்டும்.',
    'regex'                => ':attribute வடிவம் தவறானது.',
    'required'             => ':attribute புலம் தேவை.',
    'required_if'          => ':attribute எப்போது புலம் தேவை :இந்த :values அது நடக்கும்.',
    'required_unless'      => ':attribute எப்போது புலம் தேவை :இந்த, :values என்னிடம் இல்லை.',
    'required_with'        => ':attribute எப்போது புலம் தேவை :values உள்ளது.',
    'required_with_all'    => ':attribute எப்போது புலம் தேவை :values உள்ளது.',
    'required_without'     => ':attribute எப்போது புலம் தேவை :values இல்லை.',
    'required_without_all' => ':attribute ஒற்றை போது புலம் தேவை :values இல்லை.',
    'same'                 => ':attribute மற்றும் :oஇந்தr பொருத்த வேண்டும்.',
    'size'                 => [
        'numeric' => ':attribute, :size இருக்க வேண்டும்',
        'file'    => ':attribute, :size கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'string'  => ':attribute, :size ஒரு கதாபாத்திரமாக இருக்க வேண்டும்.',
        'array'   => ':attribute இல் :size உருப்படிகளைக் கொண்டிருக்க வேண்டும்.',
    ],
    'starts_with' => ':attribute பின்வருவனவற்றில் ஒன்றைத் தொடங்க வேண்டும்: :values',
    'string'      => ':attribute ஒரு சரம் இருக்க வேண்டும்.',
    'timezone'    => ':attribute செல்லுபடியாகும் துறையாக இருக்க வேண்டும்.',
    'unique'      => ':attribute ஏற்கனவே எடுக்கப்பட்டுள்ளது.',
    'uploaded'    => ':attribute பதிவேற்றுவதில் தோல்வி.',
    'url'         => ':attribute வடிவம் தவறானது.',
    'uuid'        => ':attribute செல்லுபடியாகும் UUID ஆக இருக்க வேண்டும்.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using இந்த
    | convention "attribute.rule" to name இந்த lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'நட்பு செய்தி',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | இந்த following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'test_name'               => 'சோதனை பெயர்',
        'test_description'        => 'சோதனை விவரங்கள்',
        'test_locale'             => 'மொழி',
        'image'                   => 'படம்',
        'result_text_under_image' => 'படத்தின் கீழ் உரை முடிவு',
        'short_text'              => 'குறுகிய பாடம்',
    ],
];