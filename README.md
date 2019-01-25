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
| Bool      | BoolCaster    | Cast to bool type                                     |
| Float     | FloatCaster   | Cast to float type                                    |
| Int       | IntCaster     | Cast to int type                                      |
| String    | StringCaster  | Cast to string type                                   |


## Mutators

It convert/transform data values.

| Mutator       | Classname          | Params             | Description               |
|---------------|--------------------|--------------------|---------------------------|
| Capitalize    | CapitalizeMutator  |                    | Capitalize a string       |
| Ceil          | CeilMutator        |                    | Round fractions up        |
| Evaluate      | EvaluateMutator    |                    | Evaluate a math expression|
| Floor         | FloorMutator       |                    | Round fractions down      |
| Lowercase     | LowercaseMutator   |                    | Convert to lowercases     |
| Regexreplace  | RegexreplaceMutator|pattern, replacement| Regex replacement         |
| Trim          | TrimMutator        |replacement (Opt)   | Trim spaces or characters |
| Uppercase     | UppercaseMutator   |                    | Convert to uppercases     |


Some mutators like the "RegexreplaceMutator" requires extra parameters. Example:


        $replaced = \Juanparati\DatacoreUtils\Types\Mutator::mutate('regexreplace', 'Hello World', '/(world)/i', 'Earth');
        

   