<?php
  function setActivo($ruta){
    return request()->routeIs($ruta) ? 'bg-zinc-600 text-white scale-110' : '';
  }
?>