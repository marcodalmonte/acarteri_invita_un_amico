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

    'accepted' => 'Il campo :attribute deve essere accettato.',
    'accepted_if' => 'Il campo :attribute deve essere accettato quando :other ha valore :value.',
    'active_url' => 'Il valore del campo :attribute non &eacutel un URL valido.',
    'after' => 'Il valore del campo :attribute deve essere una data successiva a :date.',
    'after_or_equal' => 'Il valore del campo :attribute deve essere una data a partire da :date.',
    'alpha' => 'Il valore del campo :attribute deve contenere solo lettere.',
    'alpha_dash' => 'Il valore del campo :attribute deve contenere solo lettere, numeri, dashes e underscores.',
    'alpha_num' => 'Il valore del campo :attribute deve contenere solo lettere e numeri.',
    'array' => 'Il valore del campo :attribute deve essere un array.',
    'before' => 'Il valore del campo :attribute deve essere una data precedente a :date.',
    'before_or_equal' => 'Il valore del campo :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'numeric' => 'Il valore del campo :attribute deve essere tra :min e :max.',
        'file' => 'Il valore del campo :attribute deve essere tra :min e :max kilobytes.',
        'string' => 'Il valore del campo :attribute deve essere tra :min e :max caratteri.',
        'array' => 'Il valore del campo :attribute deve contenere tra :min e :max elementi.',
    ],
    'boolean' => 'Il valore del campo :attribute deve essere Vero o Falso.',
    'confirmed' => 'La conferma del campo :attribute non risulta corretta.',
    'current_password' => 'La password non risulta corretta.',
    'date' => 'Il valore del campo :attribute non risulta una data valida.',
    'date_equals' => 'Il valore del campo :attribute deve essere una data uguale a :date.',
    'date_format' => 'Il valore del campo :attribute non ha formato :format.',
    'declined' => 'Il campo :attribute deve essere rifiutato.',
    'declined_if' => 'Il campo :attribute deve essere rifiutato quando :other ha valore :value.',
    'different' => 'I valori per :attribute e :other devono essere diversi.',
    'digits' => 'Il valore del campo :attribute deve essere :digits caratteri.',
    'digits_between' => 'Il valore del campo :attribute deve essere tra :min e :max caratteri.',
    'dimensions' => 'Il valore del campo :attribute ha dimensioni non corrette.',
    'distinct' => 'Il valore del campo :attribute ha un valore duplicato.',
    'email' => 'Il valore del campo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'Il valore del campo deve terminare con uno dei seguenti: :values.',
    'enum' => 'Il valore selezionato per :attribute non risulta valido.',
    'exists' => 'Il valore selezionato per :attribute non risulta valido.',
    'file' => 'Il valore del campo :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve contenere un valore.',
    'gt' => [
        'numeric' => 'Il valore per il campo :attribute deve essere maggiore di :max.',
        'file' => 'Il valore per il campo :attribute deve essere maggiore di :max kilobytes.',
        'string' => 'Il valore per il campo :attribute deve essere maggiore di :max caratteri.',
        'array' => 'Il valore per il campo :attribute deve contenere pi&uacute; di :max elementi.',
    ],
    'gte' => [
        'numeric' => 'Il valore per il campo :attribute deve essere maggiore o uguale a :value.',
        'file' => 'Il valore per il campo :attribute deve essere maggiore o uguale a :value kilobytes.',
        'string' => 'Il valore per il campo :attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => 'Il valore per il campo :attribute deve essere contenere almeno :value elementi.',
    ],
    'image' => 'Il campo :attribute deve contenere un\'immagine.',
    'in' => 'Il valore selezionato per :attribute non &eacute; valido.',
    'in_array' => 'Il valore per il campo :attribute non &eacutel contenuto in :other.',
    'integer' => 'Il valore per il campo :attribute deve essere un numero intero.',
    'ip' => 'Il valore per il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il valore per il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il valore per il campo :attribute deve essere un indirizzo IPv6 valido.',
    'mac_address' => 'Il valore per il campo :attribute deve essere un indirizzo MAC valido.',
    'json' => 'Il valore per il campo :attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il valore per il campo :attribute deve essere minore di :value.',
        'file' => 'Il valore per il campo :attribute deve essere minore di :value kilobytes.',
        'string' => 'Il valore per il campo :attribute deve essere minore di :value caratteri.',
        'array' => 'Il valore per il campo :attribute deve essere contenere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => 'Il valore per il campo :attribute deve essere minore o uguale a :value.',
        'file' => 'Il valore per il campo :attribute deve essere minore o uguale a :value kilobytes.',
        'string' => 'Il valore per il campo :attribute deve essere minore o uguale a :value caratteri.',
        'array' => 'Il valore per il campo :attribute non deve essere contenere pi&uacute; di :value elementi.',
    ],
    'max' => [
        'numeric' => 'Il valore per il campo :attribute non deve essere maggiore di :max.',
        'file' => 'Il valore per il campo :attribute non deve essere maggiore di :max kilobytes.',
        'string' => 'Il valore per il campo :attribute non deve essere maggiore di :max caratteri.',
        'array' => 'Il valore per il campo :attribute non deve contenere pi&uacute; di :max elementi.',
    ],
    'mimes' => 'Il valore per il campo :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'Il valore per il campo :attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'Il valore per il campo :attribute deve essere almeno :min.',
        'file' => 'Il valore per il campo :attribute deve essere almeno :min kilobytes.',
        'string' => 'Il valore per il campo :attribute deve essere almeno :min caratteri.',
        'array' => 'Il valore per il campo :attribute deve contenere almeno :min elementi.',
    ],
    'multiple_of' => 'Il valore per il campo :attribute deve contenere un multiplo di :value.',
    'not_in' => 'Il valore selezionato per :attribute non &eacute; valido.',
    'not_regex' => 'Il formato per :attribute  non &eacute; valido.',
    'numeric' => 'Il valore per il campo :attribute deve contenere un numero.',
    'password' => 'La password non &eacute; corretta.',
    'present' => 'Il valore per il campo :attribute deve essere dato.',
    'prohibited' => 'Il valore per il campo :attribute non &eacute; permesso.',
    'prohibited_if' => 'Il valore per il campo :attribute non &eacute; permesso quando :other ha valore :value.',
    'prohibited_unless' => 'Il valore per il campo :attribute non &eacute; permesso a meno che il valore di :other risulti tra :values.',
    'prohibits' => 'Il valore per il campo :attribute non permette a :other di essere presente.',
    'regex' => 'Il formato del campo :attribute non &eacute; valido.',
    'required' => 'Il valore per il campo :attribute &eacute; obbligatorio.',
    'required_if' => 'Il valore per il campo :attribute &eacute; obbligatorio quando :other &eacute; :value.',
    'required_unless' => 'Il valore per il campo :attribute &eacute; obbligatorio a meno che :other ha valori :values.',
    'required_with' => 'Il valore per il campo :attribute &eacute; obbligatorio quando :values viene dato.',
    'required_with_all' => 'Il valore per il campo :attribute &eacute; obbligatorio quando vengono dati i valori :values.',
    'required_without' => 'Il valore per il campo :attribute &eacute; obbligatorio quando :values non viene dato.',
    'required_without_all' => 'Il valore per il campo :attribute &eacute; obbligatorio quando nessuno dei valori :values viene dato.',
    'same' => 'I valori per i campi :attribute e :other devono essere uguali.',
    'size' => [
        'numeric' => 'Il valore per il campo :attribute :attribute deve essere :size.',
        'file' => 'Il valore per il campo :attribute :attribute deve essere :size kilobytes.',
        'string' => 'Il valore per il campo :attribute :attribute deve essere :size characters.',
        'array' => 'Il valore per il campo :attribute :attribute deve contenere :size elementi.',
    ],
    'starts_with' => 'Il valore per il campo :attribute deve iniziare con uno dei seguenti valori: :values.',
    'string' => 'Il valore per il campo :attribute deve essere una stringa.',
    'timezone' => 'Il valore per il campo :attribute deve contenere una timezone valida.',
    'unique' => 'Il valore per il campo :attribute &eacute; stato precedentemente dato.',
    'uploaded' => 'Il valore per il campo :attribute ha fallito il suo upload.',
    'url' => 'Il valore per il campo :attribute deve contenere un URL valido.',
    'uuid' => 'Il valore per il campo :attribute deve contenere un UUID valido.',

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
