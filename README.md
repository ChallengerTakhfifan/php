**Welcome to Takhfifan PHP Challenge**

In this challenge, we want you to refactor our source code to create more elegant and manageable objects. 
Before you start, you should know a little about Linux, Git, Docker, ... (And PHP of course !! :) )
So, you have to install git and docker and docker-compose before proceeding further.

**How to setup this project:**

Clone the repository and go to the cloned directory and run:

    docker-compose build

Then:

    docker-compose up -d
 
 If everything works you should see:

> Creating network "php-challenge_default" with the default driver
Creating php ... done
Creating nginx ... done

Then:

    chmod 777 source/uploaded_files

Open your browser and go to http://localhost:17171/, you will see a simple form to upload an image. Choose a file and try to upload it.

**What we want you to do**

As you will see, our code works but we want to refactor the code. You should consider:
1) Your code should work. It means after refactoring, we still need to be able to upload an image. You should not miss the functionality. It's important because some developers change the code and it looks very elegant but it has a small problem : It doesn't work!
2) Since it's a PHP challenge, we don't want you to refactor the UI part (HTML form).
3) We've already installed `composer`, if it helps you, you can use it. 
4) For the sake of simplicity, we didn't use any frameworks. You can use a framework and define your routes but we want you to focus on our main logic and refactor `FileUploader`  instead of installing a framework.
