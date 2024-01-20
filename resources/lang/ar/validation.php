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

    'accepted'             => 'يجب قبول ( :attribute )',
    'active_url'           => '( :attribute ) لا يُمثّل رابطًا صحيحًا',
    'after'                => 'يجب على ( :attribute ) أن يكون تاريخًا لاحقًا للتاريخ :date',
    'after_or_equal'       => '( :attribute ) يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date',
    'alpha'                => 'يجب أن لا يحتوي ( :attribute ) سوى على حروف',
    'alpha_dash'           => 'يجب أن لا يحتوي ( :attribute ) سوى على حروف، أرقام ومطّات',
    'alpha_num'            => 'يجب أن يحتوي ( :attribute ) على حروف وأرقامٍ فقط ولا يحتوي علي مسافات',
    'array'                => 'يجب أن يكون ( :attribute ) ًمصفوفة',
    'before'               => 'يجب على ( :attribute ) أن يكون تاريخًا سابقًا للتاريخ :date',
    'before_or_equal'      => '( :attribute ) يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) بين :min و :max',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) بين :min و :max كيلوبايت',
        'string'  => 'يجب أن يكون عدد حروف النّص ( :attribute ) بين :min و :max',
        'array'   => 'يجب أن يحتوي ( :attribute ) على عدد من العناصر بين :min و :max',
    ],
    'boolean'              => 'يجب أن تكون قيمة ( :attribute ) إما true أو false ',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل ( :attribute )',
    'date'                 => '( :attribute ) ليس تاريخًا صحيحًا',
    'date_format'          => 'لا يتوافق ( :attribute ) مع الشكل :format',
    'different'            => 'يجب أن يكون الحقلان ( :attribute ) و :other مُختلفان',
    'digits'               => 'يجب أن يحتوي ( :attribute ) على :digits رقمًا/أرقام',
    'digits_between'       => 'يجب أن يحتوي ( :attribute ) بين :min و :max رقمًا/أرقام ',
    'dimensions'           => 'الـ ( :attribute ) يحتوي على أبعاد صورة غير صالحة',
    'distinct'             => 'للحقل ( :attribute ) قيمة مُكرّرة',
    'email'                => 'يجب أن يكون ( :attribute ) عنوان بريد إلكتروني صحيح البُنية',
    'exists'               => 'القيمة المحددة ( :attribute ) غير موجودة',
    'file'                 => 'الـ ( :attribute ) يجب أن يكون ملفا',
    'filled'               => '( :attribute ) إجباري',
    'gt'                   => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) أكبر من :value',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) أكبر من :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النّص ( :attribute ) أكثر من :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي ( :attribute ) على أكثر من :value عناصر/عنصر',
    ],
    'gte'                  => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) مساوية أو أكبر من :value',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) على الأقل :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النص ( :attribute ) على الأقل :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي ( :attribute ) على الأقل على :value عُنصرًا/عناصر',
    ],
    'image'                => 'يجب أن يكون ( :attribute ) صورةً',
    'in'                   => '( :attribute ) غير موجود',
    'in_array'             => '( :attribute ) غير موجود في :other',
    'integer'              => 'يجب أن يكون ( :attribute ) عددًا صحيحًا',
    'ip'                   => 'يجب أن يكون ( :attribute ) عنوان IP صحيحًا',
    'ipv4'                 => 'يجب أن يكون ( :attribute ) عنوان IPv4 صحيحًا',
    'ipv6'                 => 'يجب أن يكون ( :attribute ) عنوان IPv6 صحيحًا',
    'json'                 => 'يجب أن يكون ( :attribute ) نصآ من نوع JSON',
    'lt'                   => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) أصغر من :value',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) أصغر من :value كيلوبايت',
        'string'  => 'يجب أن يكون طول النّص ( :attribute ) أقل من :value حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي ( :attribute ) على أقل من :value عناصر/عنصر',
    ],
    'lte'                  => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) مساوية أو أصغر من :value',
        'file'    => 'يجب أن لا يتجاوز حجم الملف ( :attribute ) :value كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص ( :attribute ) :value حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي ( :attribute ) على أكثر من :value عناصر/عنصر',
    ],
    'max'                  => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) مساوية أو أصغر من :max',
        'file'    => 'يجب أن لا يتجاوز حجم الملف ( :attribute ) :max كيلوبايت',
        'string'  => 'يجب أن لا يتجاوز طول النّص ( :attribute ) :max حروفٍ/حرفًا',
        'array'   => 'يجب أن لا يحتوي ( :attribute ) على أكثر من :max عناصر/عنصر',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) مساوية أو أكبر من :min',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) على الأقل :min كيلوبايت',
        'string'  => 'يجب أن يكون طول النص ( :attribute ) على الأقل :min حروفٍ/حرفًا',
        'array'   => 'يجب أن يحتوي ( :attribute ) على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in'               => '( :attribute ) موجود',
    'not_regex'            => 'صيغة ( :attribute ) غير صحيحة',
    'numeric'              => 'يجب على ( :attribute ) أن يكون رقمًا',
    'present'              => 'يجب تقديم ( :attribute )',
    'regex'                => 'صيغة ( :attribute ) .غير صحيحة',
    'required'             => 'حقل ( :attribute ) مطلوب',
    'required_if'          => '( :attribute ) مطلوب في حال ما إذا كان :other يساوي :value',
    'required_unless'      => '( :attribute ) مطلوب في حال ما لم يكن :other يساوي :values',
    'required_with'        => '( :attribute ) مطلوب إذا كان :values',
    'required_with_all'    => '( :attribute ) مطلوب إذا كان :values',
    'required_without'     => '( :attribute ) مطلوب إذا لم يكن :values',
    'required_without_all' => '( :attribute ) مطلوب إذا لم يكن :values',
    'same'                 => 'يجب أن يتطابق ( :attribute ) مع :other',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة ( :attribute ) مساوية لـ :size',
        'file'    => 'يجب أن يكون حجم الملف ( :attribute ) :size كيلوبايت',
        'string'  => 'يجب أن يحتوي النص ( :attribute ) على :size حروفٍ/حرفًا بالضبط',
        'array'   => 'يجب أن يحتوي ( :attribute ) على :size عنصرٍ/عناصر بالضبط',
    ],
    'string'               => 'يجب أن يكون ( :attribute ) نصآ',
    'timezone'             => 'يجب أن يكون ( :attribute ) نطاقًا زمنيًا صحيحًا',
    'unique'               => 'قيمة ( :attribute ) مُستخدمة من قبل',
    'uploaded'             => 'فشل في تحميل الـ ( :attribute )',
    'url'                  => 'صيغة الرابط ( :attribute ) غير صحيحة',
    'uuid'                 => '( :attribute ) يجب أن يكون بصيغة UUID سليمة',

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
        'abilities' => [
            'required' => 'صلاحيات الوظيفة مطلوبة'
        ]

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


    'attributes' => [
        'email' => 'البريد الإلكتروني',
        'phone' => 'الهاتف',
        'name_en' => 'الإسم باللغة الإنجليزية',
        'name_ar' => 'الاسم باللغة العربيه',
        'password' =>'كلمة المرور',
        'password_confirmation' =>'تأكيد كلمة المرور',
        'phone_number' =>'رقم الهاتف',
        'image' => 'الصورة' ,
        'address_en' => 'العنوان باللغة الانجليزية' ,
        'address_ar' => 'العنوان باللغة العربية' ,
        'lat' => 'العنوان من الخريطه',
        'lng' => 'العنوان من الخريطه',
        'year' => 'العام',
        'description_ar' => 'الوصف بالعربية',
        'description_en' => 'الوصف بالانجليزية',
        'video_url' => 'رابط الفيديو',
        'price' => 'السعر',
        'discount_price' => 'السعر بعد التخفيض',
        'tax' => 'الضريبة',
        'supplier' => 'المورد',
        'status' => 'الحالة',
        'is_new' => 'حالة السيارة',
        'main_image' => 'الصورة الرئيسية',
        'cover_image' => 'صورة الغلاف',
        'cover' => 'صورة الغلاف',
        'share_image' => 'صورة المشاركة',
        'colors' => 'الألوان',
        'meta_keywords_ar' => 'الكلمات الدلالية لمحرك البحث بالعربية',
        'meta_keywords_en' => 'الكلمات الدلالية لمحرك البحث بالانجليزية',
        'meta_desc_ar' => 'وصف مختصر لمحركات البحث بالعربية',
        'meta_desc_en' => 'وصف مختصر لمحركات البحث بالانجليزية',
        'name' => 'الأسم',
        'address' => 'العنوان',
        'title' => 'العنوان',
        'short_description' => 'وصف مختصر',
        'long_description' => 'الوصف',
        'city_id' => 'المدينة',
        'tags' => 'الوسوم',
        'description' => 'الوصف',
        'question' => 'السؤال',
        'answer' => 'الأجابة',
        'title_ar' => 'العنوان بالعربية',
        'title_en' => 'العنوان بالانجليزية',
        'cars' => 'السيارات',
        'whatsapp' => 'واتس آب',
        'roles' => 'الصلاحيات والادوار',
        'website_name_ar' => 'اسم الموقع بالعربية',
        'website_name_en' => 'اسم الموقع بالانجليزية',
        'facebook_url' => 'رابط فيسبوك',
        'twitter_url' => 'رابط تويتر',
        'instagram_url' => 'رابط انستجرام',
        'youtube_url' => 'رابط قناة اليوتيوب',
        'snapchat_url' => 'رابط سناب شات',
        'logo' => 'اللوجو',
        'favicon' => 'ايقونة الموقع',
        'setting_type' => 'نوع الاعدادات',
        'meta_tag_description_ar' => 'وصف مختصر بالعربية',
        'meta_tag_description_en' => 'وصف مختصر بالانجليزية',
        'meta_tag_keyword_ar' => 'كلمات دلالية بالعربية',
        'meta_tag_keyword_en' => 'كلمات دلالية بالانجليزية',
        'privacy_policy_ar' => 'سياسة الخصوصية بالعربية',
        'privacy_policy_en' => 'سياسة الخصوصية بالانجليزية',
        'about_us_ar' => 'عن موقعك بالعربية',
        'about_us_en' => 'عن موقعك بالانجليزية',
        'terms_and_conditions_en' => 'الشروط والاحكام بالانجليزية',
        'terms_and_conditions_ar' => 'الشروط والاحكام بالعربية',
        'show_in_home_page' => 'عرض في الصفحة الرئيسية',
        'about_us_video_url' => 'كود الفيديو',
        'maintenance_mode' => 'وضع الاصلاحات',
        'footer_text_ar' => 'نص التذييلة بالعربية',
        'footer_text_en' => 'نص التذييلة بالانجليزية',
        'parent_model_id' => 'الموديل الاساسي',
        'model_type' => 'نوع الموديل',
        'highlighted' => 'خبر مميز',
        'first_name' => 'الاسم الاول',
        'last_name' => 'الاسم الاخير',
        'cv' => 'السيرة الذاتية',
        'comment' => 'التعليق',
        'message' => 'الرسالة',
        'offer_ar' => 'العرض بالعربية',
        'offer_en' => 'العرض بالانجليزية',
        "salary" => "مبلغ الراتب في الصراف",
        "work" => "قطاع العمل",
        "bank_id" => "البنك",
        'date' => 'التاريخ',
        'slider_dashboard_username' => 'اسم مستخدم لوحة تحكم السلايدر',
        'slider_dashboard_password' => 'كلمة سر لوحة تحكم السلايدر',
        'slider_ar' => 'السلايدر العربي',
        'slider_en' => 'السلايدر الانجليزي',
        'have_discount' => 'يوجد تخفيض',
        'frame' => 'الفريم',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
    ],

    'values' => [
        'from' => [
            'today' => 'اليوم',
        ],
        'end_at' => [
            'today' => 'اليوم'
        ],
        'discount_type' => [
            'percentage' => 'نسبة مئوية'
        ],
        'type' => [
            'image' => 'صورة'
        ],
        'discount_from' => [
            'today' => 'اليوم'
        ],
        'manual_address' => [
            'address_id' => 'العنوان',
        ],
        'address_id' => [
            'manual_address' => 'العنوان اليدوي'
        ],
        'payment_method' => [
            'bank' => 'تحويل بنكي'
        ],
        'setting_type' => [
            'about-website' => 'عن الموقع',
            'general' => 'عام',
            'website' => 'الموقع'
        ],
        'date' => [
            'today' => 'اليوم'
        ],
        'price_field_status' => [
            'other' => 'آخر'
        ]



    ]
];
