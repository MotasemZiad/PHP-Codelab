<?php 
    # to sort an array(Indexed OR Associative) we have 6 methods whether in an ascending OR descending order
    # Indexed Arrays => sort, rsort
    # Associative Arrays => asort, ksort, arsort, krsort
    # All Sort functions are in-place functions
    $i_arr = [18,11,12,2,5,1,29,93];
    print_r(sort($i_arr)); # ASC
    print_r(rsort($i_arr)); # DESC

    $a_arr = [
        "name" => "Motasem Abu Nema",
        "age" => 52,
        "date_of_birth" => "05,27,1989",
        "is_alive" => true,
    ];

    print_r(asort($a_arr)); # ASC on VALUES
    print_r(ksort($a_arr)); # ASC on KEYS
    print_r(arsort($a_arr)); # DESC on VALUES
    print_r(krsort($a_arr)); # DESC on KEYS