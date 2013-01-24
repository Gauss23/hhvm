<?php
/**
 * Automatically generated by running "php schema.php variable".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "is_bool",
    'desc'   => "Finds whether the given variable is a boolean.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is a boolean, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_int",
    'desc'   => "Finds whether the type of the given variable is integer.\n\nTo test if a variable is a number or a numeric string (such as form input, which is always a string), you must use is_numeric().",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is an integer, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_integer",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_long",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_double",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_float",
    'desc'   => "Finds whether the type of the given variable is float.\n\nTo test if a variable is a number or a numeric string (such as form input, which is always a string), you must use is_numeric().",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is a float, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_numeric",
    'desc'   => "Finds whether the given variable is numeric. Numeric strings consist of optional sign, any number of digits, optional decimal part and optional exponential part. Thus +0123.45e6 is a valid numeric value. Hexadecimal notation (0xFF) is allowed too but only without sign, decimal and exponential part.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is a number or a numeric string, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_real",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_string",
    'desc'   => "Finds whether the type given variable is string.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is of type string, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_scalar",
    'desc'   => "Finds whether the given variable is a scalar.\n\nScalar variables are those containing an integer, float, string or boolean. Types array, object and resource are not scalar.\n\nis_scalar() does not consider resource type values to be scalar as resources are abstract datatypes which are currently based on integers. This implementation detail should not be relied upon, as it may change.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is a scalar FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_array",
    'desc'   => "Finds whether the given variable is an array.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is an array, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_object",
    'desc'   => "Finds whether the given variable is an object.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is an object, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_resource",
    'desc'   => "Finds whether the given variable is a resource.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is a resource, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "is_null",
    'desc'   => "Finds whether the given variable is NULL.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoEffect | NoInjection,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if var is null, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "gettype",
    'desc'   => "Returns the type of the PHP variable var. Warning Never use gettype() to test for a certain type, since the returned string may be subject to change in a future version. In addition, it is slow too, as it involves string comparison. Instead, use the is_* functions.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Possibles values for the returned string are: \"boolean\" \"integer\" \"double\" (for historical reasons \"double\" is returned in case of a float, and not simply \"float\") \"string\" \"array\" \"object\" \"resource\" \"NULL\" \"unknown type\"",
    ),
    'args'   => array(
      array(
        'name'   => "v",
        'type'   => Any,
        'desc'   => "The variable being type checked.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get_resource_type",
    'desc'   => "This function gets the type of the given resource.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "If the given handle is a resource, this function will return a string representing its type. If the type is not identified by this function, the return value will be the string Unknown.\n\nThis function will return FALSE and generate an error if handle is not a resource.",
    ),
    'args'   => array(
      array(
        'name'   => "handle",
        'type'   => Resource,
        'desc'   => "The evaluated resource handle.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "intval",
    'desc'   => "Returns the integer value of var, using the specified base for the conversion (the default is base 10). intval() should not be used on objects, as doing so will emit an E_NOTICE level error and return 1.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoInjection,
    'return' => array(
      'type'   => Int64,
      'desc'   => "The integer value of var on success, or 0 on failure. Empty arrays and objects return 0, non-empty arrays and objects return 1.\n\nThe maximum value depends on the system. 32 bit systems have a maximum signed integer range of -2147483648 to 2147483647. So for example on such a system, intval('1000000000000') will return 2147483647. The maximum signed integer value for 64 bit systems is 9223372036854775807.\n\nStrings will most likely return 0 although this depends on the leftmost characters of the string. The common rules of integer casting apply.",
    ),
    'args'   => array(
      array(
        'name'   => "v",
        'type'   => Any,
        'desc'   => "The scalar value being converted to an integer",
      ),
      array(
        'name'   => "base",
        'type'   => Int64,
        'value'  => "10",
        'desc'   => "The base for the conversion",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "doubleval",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoInjection,
    'return' => array(
      'type'   => Double,
    ),
    'args'   => array(
      array(
        'name'   => "v",
        'type'   => Any,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "floatval",
    'desc'   => "Gets the float value of var.",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoInjection,
    'return' => array(
      'type'   => Double,
      'desc'   => "The float value of the given variable. Empty arrays return 0, non-empty arrays return 1.",
    ),
    'args'   => array(
      array(
        'name'   => "v",
        'type'   => Any,
        'desc'   => "May be any scalar type. floatval() should not be used on objects, as doing so will emit an E_NOTICE level error and return 1.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "strval",
    'flags'  =>  HasDocComment | FunctionIsFoldable | NoInjection,
    'return' => array(
      'type'   => String,
      'desc'   => "The string value of var.",
    ),
    'args'   => array(
      array(
        'name'   => "v",
        'type'   => Any,
        'desc'   => "The variable that is being converted to a string.\n\nvar may be any scalar type or an object that implements the __toString method. You cannot use strval() on arrays or on objects that do not implement the __toString method.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "settype",
    'desc'   => "Set the type of variable var to type.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "var",
        'type'   => Variant | Reference,
        'desc'   => "The variable being converted.",
      ),
      array(
        'name'   => "type",
        'type'   => String,
        'desc'   => "Possibles values of type are: \"boolean\" (or, since PHP 4.2.0, \"bool\") \"integer\" (or, since PHP 4.2.0, \"int\") \"float\" (only possible since PHP 4.2.0, for older versions use the deprecated variant \"double\") \"string\" \"array\" \"object\" \"null\" (since PHP 4.2.0)",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "print_r",
    'desc'   => "print_r() displays information about a variable in a way that's readable by humans.\n\nprint_r(), var_dump() and var_export() will also show protected and private properties of objects with PHP 5. Static class members will not be shown.\n\nRemember that print_r() will move the array pointer to the end. Use reset() to bring it back to beginning.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "If given a string, integer or float, the value itself will be printed. If given an array, values will be presented in a format that shows keys and elements. Similar notation is used for objects.\n\nWhen the return parameter is TRUE, this function will return a string. Otherwise, the return value is TRUE.",
    ),
    'args'   => array(
      array(
        'name'   => "expression",
        'type'   => Any,
        'desc'   => "The expression to be printed.",
      ),
      array(
        'name'   => "ret",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "If you would like to capture the output of print_r(), use the return parameter. When this parameter is set to TRUE, print_r() will return the information rather than print it.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "var_export",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the variable representation when the return parameter is used and evaluates to TRUE. Otherwise, this function will return NULL.",
    ),
    'args'   => array(
      array(
        'name'   => "expression",
        'type'   => Any,
        'desc'   => "The variable you want to export.",
      ),
      array(
        'name'   => "ret",
        'type'   => Boolean,
        'value'  => "false",
        'desc'   => "If used and set to TRUE, var_export() will return the variable representation instead of outputing it.\n\nThis function uses internal output buffering with this parameter so it can not be used inside an ob_start() callback function.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "var_dump",
    'flags'  =>  HasDocComment | VariableArguments,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "expression",
        'type'   => Any,
        'desc'   => "The variable you want to export.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "debug_zval_dump",
    'desc'   => "Dumps a string representation of an internal zend value to output.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
      'desc'   => "No value is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "variable",
        'type'   => Any,
        'desc'   => "The variable being evaluated.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "serialize",
    'desc'   => "Generates a storable representation of a value\n\nThis is useful for storing or passing PHP values around without losing their type and structure.\n\nTo make the serialized string into a PHP value again, use unserialize().",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => String,
      'desc'   => "Returns a string containing a byte-stream representation of value that can be stored anywhere.",
    ),
    'args'   => array(
      array(
        'name'   => "value",
        'type'   => Any,
        'desc'   => "The value to be serialized. serialize() handles all types, except the resource-type. You can even serialize() arrays that contain references to itself. Circular references inside the array/object you are serializing will also be stored. Any other reference will be lost.\n\nWhen serializing objects, PHP will attempt to call the member function __sleep prior to serialization. This is to allow the object to do any last minute clean-up, etc. prior to being serialized. Likewise, when the object is restored using unserialize() the __wakeup member function is called.\n\nObject's private members have the class name prepended to the member name; protected members have a '*' prepended to the member name. These prepended values have null bytes on either side.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "unserialize",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "The converted value is returned, and can be a boolean, integer, float, string, array or object.\n\nIn case the passed string is not unserializeable, FALSE is returned and E_NOTICE is issued.",
    ),
    'args'   => array(
      array(
        'name'   => "str",
        'type'   => String,
        'desc'   => "The serialized string.\n\nIf the variable being unserialized is an object, after successfully reconstructing the object PHP will automatically attempt to call the __wakeup() member function (if it exists).\n\nunserialize_callback_func directive\n\nIt's possible to set a callback-function which will be called, if an undefined class should be instantiated during unserializing. (to prevent getting an incomplete object \"__PHP_Incomplete_Class\".) Use your php.ini, ini_set() or .htaccess to define 'unserialize_callback_func'. Everytime an undefined class should be instantiated, it'll be called. To disable this feature just empty this setting.",
      ),
      array(
        'name'   => "class_whitelist",
        'type'   => StringVec,
        'desc'   => "The array of the class names that are authorized to be unserialized. The array is default to be empty, which means no class is allowed. If the class name is a super class, all its subclasses are also allowed. Note that primitive types and Serializable classes are not subject to this whitelist. See http://fburl.com/SafeSerializable for the reason why we need this.",
        'value'  => "empty_array"
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get_defined_vars",
    'desc'   => "This function returns a multidimensional array containing a list of all defined variables, be them environment, server or user-defined variables, within the scope that get_defined_vars() is called.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "A multidimensional array with all the variables.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "import_request_variables",
    'desc'   => "Imports GET/POST/Cookie variables into the global scope. It is useful if you disabled register_globals, but would like to see some variables in the global scope.\n\nIf you're interested in importing other variables into the global scope, such as \$_SERVER, consider using extract().",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE on success or FALSE on failure.",
    ),
    'args'   => array(
      array(
        'name'   => "types",
        'type'   => String,
        'desc'   => "Using the types parameter, you can specify which request variables to import. You can use 'G', 'P' and 'C' characters respectively for GET, POST and Cookie. These characters are not case sensitive, so you can also use any combination of 'g', 'p' and 'c'. POST includes the POST uploaded file information.\n\nNote that the order of the letters matters, as when using \"GP\", the POST variables will overwrite GET variables with the same name. Any other letters than GPC are discarded.",
      ),
      array(
        'name'   => "prefix",
        'type'   => String,
        'value'  => "\"\"",
        'desc'   => "Variable name prefix, prepended before all variable's name imported into the global scope. So if you have a GET value named \"userid\", and provide a prefix \"pref_\", then you'll get a global variable named \$pref_userid.\n\nAlthough the prefix parameter is optional, you will get an E_NOTICE level error if you specify no prefix, or specify an empty string as a prefix. This is a possible security hazard. Notice level errors are not displayed using the default error reporting level.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "extract",
    'desc'   => "Import variables from an array into the current symbol table.\n\nChecks each key to see whether it has a valid variable name. It also checks for collisions with existing variables in the symbol table.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Int64,
      'desc'   => "Returns the number of variables successfully imported into the symbol table.",
    ),
    'args'   => array(
      array(
        'name'   => "var_array",
        'type'   => VariantMap,
        'desc'   => "An associative array. This function treats keys as variable names and values as variable values. For each key/value pair it will create a variable in the current symbol table, subject to extract_type and prefix parameters.\n\nYou must use an associative array; a numerically indexed array will not produce results unless you use EXTR_PREFIX_ALL or EXTR_PREFIX_INVALID.",
      ),
      array(
        'name'   => "extract_type",
        'type'   => Int32,
        'value'  => "k_EXTR_OVERWRITE",
        'desc'   => "The way invalid/numeric keys and collisions are treated is determined by the extract_type. It can be one of the following values: EXTR_OVERWRITE If there is a collision, overwrite the existing variable.",
      ),
      array(
        'name'   => "prefix",
        'type'   => String,
        'value'  => "\"\"",
        'desc'   => "If there is a collision, don't overwrite the existing variable.",
      ),
    ),
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

