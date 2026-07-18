<?php
$heading = 'My Notes';
$config = include_once 'config.php';
/**
 * | Action           | HTTP Method | URI                | Controller Method |
| ---------------- | ----------- | ------------------ | ----------------- |
| List all         | GET         | `/notes`           | `index()`         |
| Show create form | GET         | `/notes/create`    | `create()`        |
| Store            | POST        | `/notes`           | `store()`         |
| Show one         | GET         | `/notes/{id}`      | `show()`          |
| Show edit form   | GET         | `/notes/{id}/edit` | `edit()`          |
| Update           | PATCH/PUT   | `/notes/{id}`      | `update()`        |
| Delete           | DELETE      | `/notes/{id}`      | `destroy()`       |


| Thing               | Naming                                       |
| ------------------- | -------------------------------------------- |
| Resource/URL        | **Plural** (`/notes`)                        |
| Model               | **Singular** (`Note`)                        |
| Controller          | **Singular + Controller** (`NoteController`) |
| Table               | **Plural** (`notes`)                         |
| Single Variable     | **Singular** (`$note`)                       |
| Collection Variable | **Plural** (`$notes`)                        |

 */

$db = new Database($config['database']);
$notes = $db->query("select * from notes where user_id = 11")->get();
// dd($notes);

include_once './views/notes/index.view.php';
