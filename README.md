# Datacore Utils

## What is it?

A bunch of "validators", "mutators" and "casters" for generic data manipulation.


## How it works?

### Using a caster

        // Using singleton
        $int_val = \Juanparati\DatacoreUtils\Types\Caster::cast('int', 2.22)
        
        // Standard instantiation
        $int_val = (new \Juanparati\DatacoreUtils\Types\Casters\IntCaster)(2.22);
        
   
### Using a Mutator

        // Using singleton
        $evaluate = \Juanparati\DatacoreUtils\Types\Mutator::mutate('evaluate', '(2 + 2) ^ 2');
        
        // Standard instantiation
        $evaluate = (new \Juanparati\DatacoreUtils\Types\Mutators\Evaluate)('(2 + 2) ^ 2');
   

### Using a Validator

        // Using singleton
        $is_valid = \Juanparati\DatacoreUtils\Types\Validator::validate('iban', 'AD1200012030200359100100');
        
        // Standard instantiation
        $is_valid = (new \Juanparati\DatacoreUtils\Types\Validators\IBANValidator)('AD1200012030200359100100');
        
        
## Casters

It cast data types in a safe way.

| Caster    | Classname     | Description                                           |
|-----------|---------------|-------------------------------------------------------|
| bool      | BoolCaster    | Cast to bool type                                     |
| float     | FloatCaster   | Cast to float type                                    |
| int       | IntCaster     | Cast to int type                                      |
| string    | StringCaster  | Cast to string type                                   |


## Mutators

It convert/transform data values.

| Mutator        | Classname          | Params             | Description               |
|----------------|--------------------|--------------------|---------------------------|
| capitalize     | CapitalizeMutator  |                    | Capitalize a string       |
| ceil           | CeilMutator        |                    | Round fractions up        |
| evaluate       | EvaluateMutator    |                    | Evaluate a math expression|
| floor          | FloorMutator       |                    | Round fractions down      |
| lowercase      | LowercaseMutator   |                    | Convert to lowercases     |
| regex_replace  | RegexreplaceMutator|pattern, replacement| Regex replacement         |
| trim           | TrimMutator        |replacement (Opt)   | Trim spaces or characters |
| uppercase      | UppercaseMutator   |                    | Convert to uppercases     |


Some mutators like the "RegexreplaceMutator" requires extra parameters. Example:


        $replaced = \Juanparati\DatacoreUtils\Types\Mutator::mutate('regex_replace', 'Hello World', '/(world)/i', 'Earth');
        
## Validators

| Validator      | Classname           | Params              | Description                                             |
|----------------|---------------------|---------------------|---------------------------------------------------------|
| bban           | BanValidator        |                     | Bank Account Number                                     |
| between        | BetweenValidator    |min, max             | Number between a range                                  |
| creditcard     | CreditcardValidator |                     | Creditcard                                              |
| email          | EmailValidator      |                     | E-mail address                                          |
| equal_to       | EqualToValidator    |expected             | Equal condition                                         |
| greater_than   | GreaterThanValidator|bound                | Greater condition                                       |
| gtin           | GtinValidator       |codetype (8,12,13,14)| GTIN code                                               |
| iban           | IbanValidator       |                     | IBAN                                                    |
| isbn           | IsbnValidator       |                     | ISBN                                                    |
| isin           | IsinValidator       |                     | ISIN (International Securities Identification Number)   |               
| ismn           | IsmnValidator       |                     | ISMN (International Standard Music Number)              |
| iswc           | IswcValidator       |                     | ISWC (International Standard Musical Work Code          |
| lower_than     | LowerThanValidator  |bound                | Lower condition                                         |
| max_length     | MaxLengthValidator  |max_length           | Maximum string length                                   |
| min_length     | MinLengthValidator  |min_length           | Minimum string length                                   |
| phone          | PhoneValidator      |                     | Phone number                                            |
| regex          | RegexValidator      |expression           | Regex expression                                        |
| sedo           | SedoValidator       |                     | Bank Account Number                                     |
| sscc           | SsccValidator       |                     | Shipping Container Code                                 |
| swift          | SwiftValidator      |                     | Swift                                                   |
| zip            | ZipValidator        |country_code         | ZipCode/Postal Code                                     |







