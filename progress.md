## to make project run as well 
  php artisan migrate:refresh --seed
  php artisan serve
  php artisan queue:work
  
  php artisan app:news-letter-command
## important steps
    it was fun to change the design of login $register and as well changing the code. 

## public section
    i used job to send emails in contact us to make it faster

    i tried to keeb on the same design of the frontend and didnt care of the large code , it was fun to see that the site was looking good.
        -- i made seeder looks more real.

    i added a static map instead of the old one

    search was programmed , i created a new blade to display the search results

    active classe active('route') was created and added to the navbar to make the site more dinamic and realistic  used in public Navbar as wel as admin navbar


## error messages in login , register dont appear
    solved they appear now

## user can't login if was not active  
    done! only active validated users can login

## this caused a broblem that when user was registring the code was redirecting to home when user()->is_active is false
    so i disactevated this line 
            $this->guard()->login($user); in RegistersUsers
            and redirected to /  after registration
            After login user will be redirected to /admin/topic

## using factory makes som images null 
    'image'=>basename(fake()->image(public_path('assets/admin/images/topics'))),
    ## solved there is no null images now

## checkpox old
    done , now it hold on the old value 
 ##  there is an error (page not found ) in the login function.
    when i hit Enter there is an error in the page but when i click the button there is no error
    this ts the value of type="submit" in a button  
## i think that i's done :)
