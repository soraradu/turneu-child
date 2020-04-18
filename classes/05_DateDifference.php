<?

class FrontEndTime {
    private 
        $date  ,
        $formated_date ,
        $tomorrow ,
        $dayaftertomorrow ,
        $now ,
        $passed ;
        


    function __construct($date) { 
        $this->date = $date ;
        $this->formated_date = new DateTime($this->date) ;
        $this->now = current_time('mysql') ;
        $this->tomorrow = date('Y-m-d', strtotime(' +2 day'));
        $this->passed = ($this->date < $this->now) ? true : false ;

    }


    public function FormatTrounamentDate() {

        $now = date('m.d.y' , strtotime($this->now) ) ;
        $dat = date('m.d.y' , strtotime($this->date) ) ;

        $time = strtotime($this->date) ;

        if ($this->CheckIfIsToday($this->date)){
            return  'Today , at ' . date("H:i" , strtotime($this->date)) ;

        }elseif ($this->CheckIfIsTomorrow($this->date)) {
            return  'Tomorrow , at ' . date("H:i" , strtotime($this->date)) ;
        
        }elseif ($this->CheckIfIsInSameWeek($this->date)) {
            return 'This week, ' . date('d', $time). ' at ' . date("H:i" , $time ) ;
        
        }elseif ($this->CheckIfIsNextWeek($this->date)) {
            return 'Next week, ' . date('d', $time). ' ' .date('t', $time). ' ' .date('F', $time) .', at ' . date("H:i" , $time ) ;
            
        }else{
            return 'Next weeks, ' . date('d', $time). ' ' .date('t', $time). ' ' .date('F', $time) .', at ' . date("H:i" , $time ) ;

        }


    }

    public function CheckIfIsToday($date) {
        $now  = date('m.d.y' , strtotime($this->now ) ) ;
        $date = date('m.d.y' , strtotime($this->date) ) ;
        if( $now === $date )
            return true ;
    }

    public function CheckIfIsTomorrow($date) {
        $now  = date('m.d.y' , strtotime($this->now . ' + 1 days') ) ;
        $date = date('m.d.y' , strtotime($this->date) ) ;
        if( $now === $date )
            return true ;
    }

    public function CheckIfIsInSameWeek($date) {
        $now  = date('W' , strtotime($this->now) ) ;
        $date = date('W' , strtotime($this->date) ) ;
        if( $now == $date )
            return true ;
    }

    public function CheckIfIsNextWeek($date) {
        $now  = date('W' , strtotime($this->now) ) ;
        $date = date('W' , strtotime($this->date) ) ;
        if( $now+1 == $date )
            return true ;
    }

    public function SetGrupDateTitle() {

        global $activeGrupTitle ;

        if (  $this->CheckIfIsToday($this->date) && $activeGrupTitle != 'Today'){
            $activeGrupTitle = 'Today' ;
            return $activeGrupTitle ;

        }elseif (  $this->CheckIfIsTomorrow($this->date) && $activeGrupTitle != 'Tomorrow'){
            $activeGrupTitle = 'Tomorrow' ;
            return $activeGrupTitle ;

        }elseif (  $this->CheckIfIsInSameWeek($this->date) && $activeGrupTitle != 'This Week'){
            $activeGrupTitle = 'This Week' ;
            return $activeGrupTitle ;

        }elseif (  $this->CheckIfIsNextWeek($this->date) && $activeGrupTitle != 'Next Week'){
            $activeGrupTitle = 'Next Week' ;
            return $activeGrupTitle ;

        }elseif( $activeGrupTitle !== 'Next Weeks' ){
            $activeGrupTitle = 'Next Weeks' ;
            return $activeGrupTitle ;

        }

        return null ;

    }



}


function FrontEndTime($date) {
    return new FrontEndTime($date) ;
}

?>