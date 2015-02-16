# INSTALLATION

Installation is weird. First thing is to delete all user and auth stuff from the L5 app. Maybe there is a way to just over-ride 'em, but I flat-out deleted 'em. 

This user management package is designed to specifically work with my LaSalleCMS, so deleting the app files is ok. 

To make this package generic, I'll either have to enumerate the deletions; and/or, figure out overrides. 



## Require in composer.json

In the "require-dev":

```
{
    "require-dev": {
        "lasallecms/lasallecms-flagship": "dev-master",
    }
}
```