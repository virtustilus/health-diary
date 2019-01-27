# developer preparation
Here is the tutorial for my friends, how they can prepare their dev env in Windows.
It's not must have, but recommended as good start.

## git and ssh keys
https://git-scm.com/download
when install: 
“use git and optional unix tools from the command prompt”
“use openssh”
“use openssl library”
“checkout as-is, commit unix line-ending”
“use mintty”
“enable filesystem caching”

*Create your Github account.*

Open git-bash and do:

    ssh-keygen.exe

and click Enter for each question.
This will generate new keys for your ssh connections.
Now open github.com account settings -> ssh and pgp keys -> new ssh key
Run command in bash terminal:

    cat ~/.ssh/id_rsa.pub

And copy whole text like: "ssh-rsa AAA.......KF5Z andr@virtual-andrey"
and past into new SSH key in github.

Now open git-bash again and you can if your key is working correctly:

    ssh -T git@github.com

It will ask if RSA fingerprint is coorect, answer "yes".
Then at the end it will show you something like: "Hi virtustilus! You've successfully authenticated, but GitHub does not provide shell access."

Add you name and email like:

    git config --global user.name "Your Name"
    git config --global user.email "your-email@domain.com"

## cloning project
Now let's create your project directory.
I will use main directory *Projects* for projects in my home directory, but you can use yours own.

    mkdir -p ~/Projects
    cd ~/Projects
    git clone git@github.com:virtustilus/health-diary.git
    cd health-diary/
    ls -la

You should see files from this project.

## IDE - Visual Studio Code
Not it's time to install Visual Studio Code.
Open [https://code.visualstudio.com/](https://code.visualstudio.com/)
Download, install and open it.
At the left icons go to extensions (bottom one).

Install next extensions:
- Bookmarks
- Docker
- PHP Debug
- PHP IntelliSense
- Twig Language 2
- Gitlens
- PHP Intelephense
- Todo Highlighter
- Rest Client
- Pgsql

Go to settings by CTRL+, and type "PHP". Now turn off the line: "PHP > Suggest:Basic".

Click CTRL+P and type next words: ">display" and open Configure Display Language by click Enter.
Now it has to have "en" as default locale set and save it (CTRL+S). Now restart VSCode fully.

You can also use `PGSQL` plugin in VSCode, but you will need to manually install `psql` tool to be able to use pgsql plugin. (for example on OSX you can use `brew install postgresql` for that).
For "pgsql" plugin you will also need to specify a row to connect.
Open settings (CTRL+,) and search for "pgsql". Then in the field with connection line set next value: `postgres://postgres:root@127.0.0.1:5432/health_diary`

Go to top left icon (Explorer) and click "Open Folder" button.
Find and go inside Health-diary and click "Choose folder".
The path should be like "Disk C: > Users > YOUNAME > Projects > health-diary".
Now at the left you should to see this structure:

    - health-diary
        - LICENSE
        - README.md
        - WINDOWS_PREPARE.md
        ...


## Now install Docker.

### For Windows 10 or Enterprise:
[https://www.docker.com/products/docker-desktop](https://www.docker.com/products/docker-desktop)

After installation Docker might ask to enable Hyper-V, allow it to do and it will restart.

Open docker settings from tray. Set memory to 5 GB and CPU to maximum your cores count.

### For previous Windows only (like windows 7, windows 8):

Install last VirtualBox and Extension Pack [https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)

Download and install Docker toolbox:
[https://docs.docker.com/toolbox/overview/](https://docs.docker.com/toolbox/overview/)

--- PLEASE HELP WITH DESCRIPTION FOR THESE OS, since I don't have win7 ---

Open docker settings from tray. Set memory to 5 GB and CPU to maximum your cores count.




Now you can learn your new IDE and project structure. Go back to [README.md](README.md) and start this project.

P.S.
Don't forget to learn your new IDE.
To open any file you can use CTRL+P and type some parts of the path to the file. 
To bookmart some place use CTRL+P and type ">btl", push enter, type some name, enter again.
When you will need to return to this place, use CTRP+P, ">bli", and choose needed place.

