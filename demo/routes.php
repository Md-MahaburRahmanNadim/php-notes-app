<?php
return [
    '/'=>'controllers/index.php',   
    '/about'=>'controllers/about.php',
    '/notes'=>'controllers/notes.php',
    /**
     * /notes its use to view all notes a particuler user
     */
    '/note'=>'controllers/note.php',
    /**
     * /note/:note or /note = to see a specific id note
     */
    '/note/create' => 'controllers/note-create.php',
    '/contract'=>'controllers/contract.php'
    ];