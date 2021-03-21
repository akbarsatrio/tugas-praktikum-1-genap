<?php

  function getGrade($hasil) {
    if($hasil >= 85){
      return 'A';
    } else if($hasil >= 70){
      return 'B';
    } else if($hasil >= 55) {
      return 'C';
    } else if($hasil >= 40) {
      return 'D';
    } else {
      return 'E';      
    }
  }

  function getIp($hasil) {
    if($hasil >= 85){
      return '4';
    } else if($hasil >= 70){
      return '3';
    } else if($hasil >= 55) {
      return '2';
    } else if($hasil >= 40) {
      return '1';
    } else {
      return '0';      
    }
  }