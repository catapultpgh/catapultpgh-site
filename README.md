# Catapult PGH

## Deployment Notes

Want to deploy your changes?

From a directory in your clone of the repository: 

	$ git push origin master
	$ ssh [username@]catapultpgh.org "cd /srv/www/catapultpgh.org/root && git pull"

*(You can omit the `username` part if your account name on the server is the same as your local shell's username.)*