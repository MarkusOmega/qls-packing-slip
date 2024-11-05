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

    'accepted' => 'Het :attribute veld moet worden geaccepteerd.',
    'accepted_if' => 'Het :attribute veld moet worden geaccepteerd wanneer :other :value is.',
    'active_url' => 'Het :attribute veld moet een geldige URL zijn.',
    'after' => 'Het :attribute veld moet een datum na :date zijn.',
    'after_or_equal' => 'Het :attribute veld moet een datum na of gelijk aan :date zijn.',
    'alpha' => 'Het :attribute veld mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribute veld mag alleen letters, cijfers, koppeltekens en underscores bevatten.',
    'alpha_num' => 'Het :attribute veld mag alleen letters en cijfers bevatten.',
    'array' => 'Het :attribute veld moet een array zijn.',
    'ascii' => 'Het :attribute veld mag alleen enkel-byte alfanumerieke tekens en symbolen bevatten.',
    'before' => 'Het :attribute veld moet een datum vóór :date zijn.',
    'before_or_equal' => 'Het :attribute veld moet een datum vóór of gelijk aan :date zijn.',
    'between' => [
        'array' => 'Het :attribute veld moet tussen de :min en :max items hebben.',
        'file' => 'Het :attribute veld moet tussen de :min en :max kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet tussen de :min en :max zijn.',
        'string' => 'Het :attribute veld moet tussen de :min en :max karakters zijn.',
    ],
    'boolean' => 'Het :attribute veld moet waar of onwaar zijn.',
    'can' => 'Het :attribute veld bevat een niet-toegestane waarde.',
    'confirmed' => 'De bevestiging van het :attribute veld komt niet overeen.',
    'contains' => 'Het :attribute veld mist een vereiste waarde.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => 'Het :attribute veld moet een geldige datum zijn.',
    'date_equals' => 'Het :attribute veld moet een datum gelijk aan :date zijn.',
    'date_format' => 'Het :attribute veld moet overeenkomen met het formaat :format.',
    'decimal' => 'Het :attribute veld moet :decimal decimalen hebben.',
    'declined' => 'Het :attribute veld moet worden afgewezen.',
    'declined_if' => 'Het :attribute veld moet worden afgewezen wanneer :other :value is.',
    'different' => 'Het :attribute veld en :other moeten verschillend zijn.',
    'digits' => 'Het :attribute veld moet :digits cijfers hebben.',
    'digits_between' => 'Het :attribute veld moet tussen de :min en :max cijfers hebben.',
    'dimensions' => 'Het :attribute veld heeft ongeldige afbeeldingsdimensies.',
    'distinct' => 'Het :attribute veld heeft een duplicaatwaarde.',
    'doesnt_end_with' => 'Het :attribute veld mag niet eindigen met een van de volgende: :values.',
    'doesnt_start_with' => 'Het :attribute veld mag niet beginnen met een van de volgende: :values.',
    'email' => 'Het :attribute veld moet een geldig e-mailadres zijn.',
    'ends_with' => 'Het :attribute veld moet eindigen met een van de volgende: :values.',
    'enum' => 'De geselecteerde :attribute is ongeldig.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'extensions' => 'Het :attribute veld moet een van de volgende extensies hebben: :values.',
    'file' => 'Het :attribute veld moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde hebben.',
    'gt' => [
        'array' => 'Het :attribute veld moet meer dan :value items hebben.',
        'file' => 'Het :attribute veld moet groter zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute veld moet groter zijn dan :value.',
        'string' => 'Het :attribute veld moet meer dan :value karakters hebben.',
    ],
    'gte' => [
        'array' => 'Het :attribute veld moet :value items of meer hebben.',
        'file' => 'Het :attribute veld moet groter dan of gelijk aan :value kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet groter dan of gelijk aan :value zijn.',
        'string' => 'Het :attribute veld moet groter dan of gelijk aan :value karakters zijn.',
    ],
    'hex_color' => 'Het :attribute veld moet een geldige hexadecimale kleur zijn.',
    'image' => 'Het :attribute veld moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld moet bestaan in :other.',
    'integer' => 'Het :attribute veld moet een geheel getal zijn.',
    'ip' => 'Het :attribute veld moet een geldig IP-adres zijn.',
    'ipv4' => 'Het :attribute veld moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het :attribute veld moet een geldig IPv6-adres zijn.',
    'json' => 'Het :attribute veld moet een geldige JSON-string zijn.',
    'list' => 'Het :attribute veld moet een lijst zijn.',
    'lowercase' => 'Het :attribute veld moet in kleine letters zijn.',
    'lt' => [
        'array' => 'Het :attribute veld moet minder dan :value items hebben.',
        'file' => 'Het :attribute veld moet minder zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute veld moet minder zijn dan :value.',
        'string' => 'Het :attribute veld moet minder dan :value karakters hebben.',
    ],
    'lte' => [
        'array' => 'Het :attribute veld mag niet meer dan :value items hebben.',
        'file' => 'Het :attribute veld moet minder dan of gelijk aan :value kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet minder dan of gelijk aan :value zijn.',
        'string' => 'Het :attribute veld moet minder dan of gelijk aan :value karakters zijn.',
    ],
    'mac_address' => 'Het :attribute veld moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'Het :attribute veld mag niet meer dan :max items hebben.',
        'file' => 'Het :attribute veld mag niet groter zijn dan :max kilobytes.',
        'numeric' => 'Het :attribute veld mag niet groter zijn dan :max.',
        'string' => 'Het :attribute veld mag niet groter zijn dan :max karakters.',
    ],
    'max_digits' => 'Het :attribute veld mag niet meer dan :max cijfers hebben.',
    'mimes' => 'Het :attribute veld moet een bestand zijn van type: :values.',
    'mimetypes' => 'Het :attribute veld moet een bestand zijn van type: :values.',
    'min' => [
        'array' => 'Het :attribute veld moet minstens :min items hebben.',
        'file' => 'Het :attribute veld moet minstens :min kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet minstens :min zijn.',
        'string' => 'Het :attribute veld moet minstens :min karakters zijn.',
    ],
    'min_digits' => 'Het :attribute veld moet minstens :min cijfers hebben.',
    'missing' => 'Het :attribute veld moet ontbreken.',
    'missing_if' => 'Het :attribute veld moet ontbreken wanneer :other :value is.',
    'missing_unless' => 'Het :attribute veld moet ontbreken tenzij :other in :values is.',
    'missing_with' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig zijn.',
    'missing_with_all' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig zijn.',
    'multiple_of' => 'Het :attribute veld moet een veelvoud zijn van :value.',
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het formaat van het :attribute veld is ongeldig.',
    'numeric' => 'Het :attribute veld moet een getal zijn.',
    'password' => [
        'letters' => 'Het :attribute veld moet minstens één letter bevatten.',
        'mixed' => 'Het :attribute veld moet minstens één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het :attribute veld moet minstens één getal bevatten.',
        'symbols' => 'Het :attribute veld moet minstens één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is verschenen in een datalek. Kies een ander :attribute.',
    ],
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'present_if' => 'Het :attribute veld moet aanwezig zijn wanneer :other :value is.',
    'present_unless' => 'Het :attribute veld moet aanwezig zijn tenzij :other :value is.',
    'present_with' => 'Het :attribute veld moet aanwezig zijn wanneer :values aanwezig zijn.',
    'present_with_all' => 'Het :attribute veld moet aanwezig zijn wanneer :values aanwezig zijn.',
    'prohibited' => 'Het :attribute veld is verboden.',
    'prohibited_if' => 'Het :attribute veld is verboden wanneer :other :value is.',
    'prohibited_unless' => 'Het :attribute veld is verboden tenzij :other in :values is.',
    'prohibits' => 'Het :attribute veld verbiedt :other.',
    'regex' => 'Het formaat van het :attribute veld is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet de volgende waarden bevatten: :values.',
    'required_if' => 'Het :attribute veld is verplicht wanneer :other :value is.',
    'required_if_accepted' => 'Het :attribute veld is verplicht wanneer :other is geaccepteerd.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values is.',
    'required_with' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_with_all' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht wanneer :values niet aanwezig zijn.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => 'Het :attribute veld en :other moeten overeenkomen.',
    'size' => [
        'array' => 'Het :attribute veld moet :size items bevatten.',
        'file' => 'Het :attribute veld moet :size kilobytes zijn.',
        'numeric' => 'Het :attribute veld moet :size zijn.',
        'string' => 'Het :attribute veld moet :size karakters zijn.',
    ],
    'starts_with' => 'Het :attribute veld moet beginnen met een van de volgende: :values.',
    'string' => 'Het :attribute veld moet een string zijn.',
    'timezone' => 'Het :attribute veld moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het :attribute veld kon niet worden geüpload.',
    'url' => 'Het formaat van het :attribute veld is ongeldig.',
    'uuid' => 'Het :attribute veld moet een geldige UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using
    | the convention "attribute.rule" to name the lines. This makes it
    | quick to specify a specific custom language line for a given attribute.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Aangepaste boodschap',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'shipping-option' => 'verzend optie'
    ],

];