Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git config --global user.name 'Ammar Siddiqui'

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git config --global user.email 'ammar.siddiqui847@gmail.com'

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git add index.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

        new file:   index.php


Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

        new file:   index.php


Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)

        new file:   index.php

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   index.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git add .

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit
[master (root-commit) c559aac]  Initial commit
 1 file changed, 18 insertions(+)
 create mode 100644 index.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git add .

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master
nothing to commit, working tree clean

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit
On branch master
nothing to commit, working tree clean

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit
On branch master
Changes not staged for commit:
        modified:   index.php

no changes added to commit

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git add index.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        modified:   index.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit
Aborting commit due to empty commit message.

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit
[master 4302055] testing commit
 1 file changed, 8 insertions(+)

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git commit -m "Testing"

On branch master
nothing to commit, working tree clean

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch .gitignore

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch dir/
touch: setting times of 'dir/': No such file or directory

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch /dir
touch: cannot touch '/dir': Permission denied

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch /folder
touch: cannot touch '/folder': Permission denied

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch folder/
touch: setting times of 'folder/': No such file or directory

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch src

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        .gitignore

nothing added to commit but untracked files present (use "git add" to track)

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        .gitignore
        src/

nothing added to commit but untracked files present (use "git add" to track)

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git add .

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ git status
On branch master
Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

        new file:   .gitignore
        new file:   src/includes/db.in.php
        new file:   src/includes/login.in.php
        new file:   src/includes/signup.in.php

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch src/account/.keep
touch: cannot touch 'src/account/.keep': No such file or directory

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch src/app_data/user/.keep

Ammar@Haseeb-HP MINGW64 /c/xampp/htdocs/Practice/Applications/PHP/PHP-Photo-Sharing-App-1 (master)
$ touch src/assets/.keep