Assignment 3
===
Build API that consumes another api and renders it in json file

Use
===
Go to localhost/assignment-03/linkedin-api.php/v1/accountname
Go to localhost/assignment-03/github-api.php/v1/accountname

What was implemented
===
Set up Model class, API class, Database class and Parse class

Contains the following files
===
- src/
    - api/
      - github_api/
        - api.php
      - linkedin_api/
        - api.php
    - db/
      - mysqli.php
    - model/
      - model.php
      - github_model/
        - model.php
      - linkedin_model/
        - model.php
    - parse/
      - github_model_parse/
        - parse.php
      - linkedin_model_parse/
        - parse.php
    - v1
      - list-git.json
      - list-profile.json
- tests/
    - bootstrap.php
    - conf
        - phpunit.xml
    - src/
        - db_test/
          - mysqli_test.php
        - model_test/
          - model_test.php
- github-api.php    calls the github api
- linkedin-api.php  calls the linkedin api
- bootstrap.php     takes care autoloading
- composer.json     sets up autoloading, dependency (phpunit)
- README.md
