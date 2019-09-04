<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 03/09/2019
 * Time: 8:25 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Notification
{
    //Text validation Tool for Form Validation
    public function text_validation($data = NULL)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    //Notification Alert
    public function alert()
    {
        if (isset($_SESSION['msg']) || isset($_SESSION['error_type'])) {
            echo '<div class="alert bg-' . $_SESSION['error_type'] . ' text-center text-white"> ' . $_SESSION['msg'] . '</div>';
            unset($_SESSION['msg']);
            unset($_SESSION['error_type']);
        }
    }

    //Modal Notification Pop UP
    public function modal()
    {
        if (isset($_SESSION['msg']) || isset($_SESSION['error_type'])) {
            echo '<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">' .
                '<div class="modal-dialog" role="document">' .
                '<div class="modal-content">' .
                '<div class="modal-header bg-' . $_SESSION['error_type'] . '">' .
                '<h5 class="modal-title text-white" id="exampleModalLabel">' .
                '<i class="fa fa-exclamation-triangle"></i>' .
                'Notification' .
                '</h5>' .
                '<button class="close" type="button" data-dismiss="modal" aria-label="Close">' .
                '<span aria-hidden="true">X</span>' .
                '</button>' .
                '</div>' .
                '<div class="modal-body">';
            if (is_array($_SESSION['msg'])) {
                echo '<ul>';
                foreach ($_SESSION['msg'] as $msg) {
                    echo '<li>' . $msg . '</li>';
                }
                echo '</ul>';
            } else {
                echo $_SESSION['msg'];
            }

            echo '</div></div></div></div>';
            unset($_SESSION['msg']);
            unset($_SESSION['error_type']);
        }
    }


    //form fill up notice
    public function form_fillup_notice()
    {
        echo '<div class="alert alert-warning alert-dismissible">' .
            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' .
            '<h4><i class="icon fa fa-ban"></i> ফর্ম পূরণের নিয়ম</h4>' .
            '<ul>' .
            '<li>আবেদনের ফর্ম ইংরেজি বড় হাতের অক্ষর দিয়ে ফিলআপ করতে হবে। উদাহরণঃ HELLO WORLD.</li>' .
            '<li>বর্তমান ইমেজ আপলোড করা যাবে না।</li>' .
            '</ul>' .
            '</div>';
    }

    public function NumberToWord($num = false)
    {
        $num = str_replace(array(',', ' '), '', trim($num));
        if (!$num) {
            return false;
        }

        $num = (int)$num;
        $words = array();
        $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
            'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        );
        $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
        $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
            'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
            'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
        );
        $num_length = strlen($num);
        $levels = (int)(($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);
        for ($i = 0; $i < count($num_levels); $i++) {
            $levels--;
            $hundreds = (int)($num_levels[$i] / 100);
            $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
            $tens = (int)($num_levels[$i] % 100);
            $singles = '';
            if ($tens < 20) {
                $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
            } else {
                $tens = (int)($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int)($num_levels[$i] % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . (($levels && ( int )($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
        } //end for loop
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }
        return implode(' ', $words);
    }


}
