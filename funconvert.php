<?php

// Function which returns number to words
    if(isset($_POST['abc'])){

        $a = intval($_POST['abc']);
        $arraywords = array();
        $newwords = '';

        if($a < 0 or $a > 9999){
            echo $a = 'Should not less than 0 or more than 9999!';
        }else{
            $len = strlen($a);
            $arraywords = str_split($a);
            $last2 = substr($a, 2);
            $last3 = substr($a, 3);

            foreach ($arraywords as $key => $value) {
                switch ($value){
                    case "0":
                        if(intval($a) == 0){
                            $newwords = 0;
                        }else{
                            $newwords .= '';
                        }

                        if($a ==10){
                            $newwords .= 'Ten';
                        }
                         
                    break;
                    case "1":
                        if($len == 2){                            
                            switch ($last2){
                                case "10":
                                    $newwords .= 'Ten';
                                    break;
                                case "11":
                                    $newwords .= 'Eleven';
                                    break;
                                case "12":
                                    $newwords .= 'Twelve';
                                    break;
                                case "13":
                                    $newwords .= 'Thirteen';
                                    break;
                                case "14":
                                    $newwords .= 'Fourteen';
                                    break;
                                case "15":
                                    $newwords .= 'Fifteen';
                                    break;
                                case "16":
                                    $newwords .= 'Sixteen';
                                    break;
                                case "17":
                                    $newwords .= 'Seventeen';
                                    break;
                                case "18":
                                    $newwords .= 'Eighteen';
                                    break;
                                case "19":
                                    $newwords .= 'Nineteen';
                                    break;
                            }                          
 
                        }else{
                            if($len == 1){
                                if(intval($last2) > 10 && intval($last2) < 20){
                                    $newwords .= '';
                                }elseif(strlen($a) == 2){

                                    if($a ==11){
                                        $newwords .= 'Eleven';
                                    }else{
                                       $newwords .= '-One'; 
                                    }
                                    
                                }elseif(intval($last2) < 10){
                                    $newwords .= 'One ';
                                }else{
                                    $newwords .= '-One'; 
                                }                                
                            }else{  
                                $newwords .= 'One '; 
                            }
                        }
                    break;
                    case "2":
                        if($len == 2){
                            $newwords .= 'Twenty';
                        }elseif($len == 1){

                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==12){
                                    $newwords .= 'Twelve';
                                }else{
                                    $newwords .= '-Two';
                                }
                                
                            }elseif(intval($last2) < 10){
                                $newwords .= 'Two ';
                            }else{
                                $newwords .= '-Two';
                            }
                                                       
                        }else{
                            $newwords .= 'Two '; 
                        }                   
                    break;
                    case "3":
                        if($len == 2){
                            $newwords .= 'Thirty';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==13){
                                    $newwords .= 'Thirteen';
                                }else{
                                    $newwords .= '-Three';
                                }
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Three ';
                                }else{
                                $newwords .= '-Three';
                            }
                                                      
                        }else{
                            $newwords .= 'Three '; 
                        } 
                    break;
                    case "4":
                        if($len == 2){
                            $newwords .= 'Forty';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==14){
                                    $newwords .= 'Fourteen';
                                }else{
                                    $newwords .= '-Four';
                                }                        
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Four ';
                                }else{
                                $newwords .= '-Four';
                            }
                                                      
                        }else{
                            $newwords .= 'Four '; 
                        } 
                    break;
                    case "5":
                        if($len == 2){
                            $newwords .= 'Fifty';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==15){
                                    $newwords .= 'Fifteen';
                                }else{
                                    $newwords .= '-Five';
                                } 
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Five ';
                                }else{
                                $newwords .= '-Five';
                            }
                              
                        }else{
                            $newwords .= 'Five '; 
                        } 
                    break;
                    case "6":
                        if($len == 2){
                            $newwords .= 'Sixty';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==16){
                                    $newwords .= 'Sixteen';
                                }else{
                                    $newwords .= '-Six';
                                } 
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Six ';
                                }else{
                                $newwords .= '-Six';
                            }
                              
                        }else{
                            $newwords .= 'Six '; 
                        } 
                    break;
                    case "7":
                        if($len == 2){
                            $newwords .= 'Seventy';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                if($a ==17){
                                    $newwords .= 'Seventeen';
                                }else{
                                    $newwords .= '-Seven';
                                } 
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Seven ';
                                }else{
                                $newwords .= '-Seven';
                            }
                                                       
                        }else{
                            $newwords .= 'Seven '; 
                        } 
                    break;
                    case "8":
                        if($len == 2){
                            $newwords .= 'Eighty';
                        }elseif($len == 1){                          
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                 if($a ==18){
                                    $newwords .= 'Eighteen';
                                }else{
                                    $newwords .= '-Eight';
                                } 
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Eight ';
                                }else{
                                $newwords .= '-Eight';
                            }
                                                    
                        }else{
                            $newwords .= 'Eight '; 
                        } 
                    break;
                    case "9":
                        if($len == 2){
                            $newwords .= 'Ninety';
                        }elseif($len == 1){
                            
                            if(intval($last2) > 10 && intval($last2) < 20){
                                $newwords .= '';
                            }elseif(strlen($a) == 2){

                                 if($a ==19){
                                    $newwords .= 'Nineteen';
                                }else{
                                    $newwords .= '-Nine';
                                } 
                                
                            }elseif(intval($last2) < 10){
                                    $newwords .= 'Nine ';
                                }else{
                                $newwords .= '-Nine';
                            }
                                                        
                        }else{
                            $newwords .= 'Nine '; 
                        } 
                    break;
                    default:
                    $newwords .= '';
                }
                if($len == 4){
                    if($value == "1"){
                        $newwords .= ' thousand ';
                    }else{
                        $newwords .= ' thousands ';
                    }
                    
                }
                if($len == 3){
                    if($value == "1"){
                        if($last2 == "00"){
                            $newwords .= ' hundred';  
                        }else{
                            $newwords .= ' hundred and ';
                        }                        
                    }else{
                        if($last2 == "00"){
                            if($value == "0"){
                                $newwords .= '';       
                            }else{
                                $newwords .= ' hundreds';    
                            }
                             
                        }else{
                            $newwords .= ' hundreds and ';
                        } 
                    }                  
                }
                $len--;
            }            
            echo $newwords;
        }

    }else{
        echo $a = 'Error!';
    }

