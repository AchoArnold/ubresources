#Contribution Guidelines

##Database
*	[Postgresql](http://www.postgresql.org/)

##UI Framewowk
*	[Bootstrap](http://getbootstrap.com).

##Backend Framework
*	[Laravel Stable Version](http://laravel.com/docs).

##Data Warehouse
*	[Dropbox](http://dropbox.com).
*	username: ubresources2014@gmail.com
*	password: fetbuea2014

##Contributing Code
*  You agree to license your contributions under [MIT license](http://opensource.org/licenses/MIT)

##How to submit code

###GitHub work-flow
   1. Set up remote repo ($ git remote add ubresources git@github.com:najela/ubresources.git)
   2. Create a branch for a bug ($ git checkout -b new-issue-888888)
   3. Develop on bug branch.

   [Time passes, the najela/ubresources repository accumulates new commits]
   4. Commit changes to bug branch ($ git add . ; git commit -m 'fix bug 888888 - commit message')
   5. Fetch ubresources ($ git fetch ubresources)
   6. Update local master ($ git checkout master; git pull origin master)

   Repeat steps 4-7 till dev is complete

   7. Rebase issue branch ($ git checkout new-issue-888888; git rebase master)
   8. Push branch to GitHub ($ git push origin new-issue-888888)
   9. Issue pull request (Click Pull Request button)
