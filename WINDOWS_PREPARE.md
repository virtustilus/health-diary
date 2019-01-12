# developer preparation
Here is the tutorial for my friends, how they can prepare their dev env in Windows.
It's not must have, but recommended as good start.

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

Now let's create your project directory.
I will use main directory *Projects* for projects in my home directory, but you can use yours own.

    mkdir -p ~/Projects
    cd ~/Projects
    git clone https://github.com/virtustilus/health-dairy.git
    cd health-dairy/
    ls -la

You should see files from this project.

Not it's time to install Visual Studio Code.
Open [https://code.visualstudio.com/](https://code.visualstudio.com/)

