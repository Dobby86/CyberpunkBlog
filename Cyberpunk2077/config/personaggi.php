<?php

$data = '[
  {
    "src": "https://mir-s3-cdn-cf.behance.net/project_modules/1400/36281e13211617.567b18bfe3a3d.jpg",
    
    "titolo": "Macchine sportive",
    "tipo": "BMW",
    "peso": "500kg",
    "descrizione": "È la vera rivelazione ......"
  },
  {
    "src": "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Cyberpunk_city_(4065413356).jpg/1200px-Cyberpunk_city_(4065413356).jpg",
  
    "titolo": "Skyline",
    "tipo": "New York",
  
    "peso": "ND",
    "descrizione": "Forse di origine romana le........"
  },
  {
    "src": "https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/06/EbX8hZdWoAEX7xC.jpg",

    "titolo": "Kenue Revees",
    "tipo": "Actor",

    "peso": "80kg",
    "descrizione": "attore di hollywood............."
  }
  ]';

  //array
  $cards = json_decode($data, true);
return $cards;
