# LaravelProject
## clean empty laravel project to start developing from.

This is just a clean almost empty laravel installation. I've added roles and some seeded sample roles and sample users.

## New methods
Within the user model you can access the roles by using roles(). You'll receive a collection of assigned roles.

With getRoles() you can get the assigned roles as a string separated by $glue (normally comma separated). Normally you get the name of the role. You can get the description by choosing $name-parameter to be "description".
```
getRoles($glue = ",", $name="name")
```

The following three methods are used to check the roles. authorizeRoles throws exception if no matching role is given. This results in showing a 401 http error and viewing a nice blade template.
```
authorizeRoles
hasAnyRole
hasRole
```

## Setting up the database
Before you can use database functionality you've to setup your database credentials. They'll be configured in the .env file. There is a .env.example file you can use as a blueprint.

## Additional notes
This project is using [fontawesome pro icons](https://fontawesome.com/pro). The use of fontawesome pro requires a paid license. For this reason, fontawesome pro is <u>not</u> part of this project. There is also a free fontawesome available.
 