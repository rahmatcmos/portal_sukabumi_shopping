<?php
  function success($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='alert alert-success'><i class='fa fa-check'> $message </i></div>");
  }

  function wrong($message = '')
  {
    $CI =& get_instance();
    return $CI->session->set_flashdata("msg", "<div class='alert alert-danger'><i class='fa fa-info-circle'> $message </i></div>");
  }

  function information($message = '')
  {
    $CI =& get_instance();
    return "<div class='text-info'> $message</div>";
  }
?>