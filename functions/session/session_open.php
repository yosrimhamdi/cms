<?php
function session_open() {
  session_start(); 
  session_unset();
}