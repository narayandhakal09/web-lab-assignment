
# Creating a Virtual Hosts
 Current url for ./project1 and ./project2 are 

- http://localhost/GITHUB/Web%20Technology/Assignments/Assignment%207/project1
- <http://localhost/GITHUB/Web%20Technology/Assignments/Assignment%207/project/>

But What if we can shorten to a costom domain like
- http://project1.local
- http://project2.local

 Find path to xaamp and  `C:\xampp\apache\conf\extra` and open filename 
`httpd-vhosts.conf` and Change DocumentRoot and ServerName accordingly

 ```CONF
 <VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\GITHUB\Web Technology\Assignments\Assignment 7\project1
"
    ServerName project1.local
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot "C:\xampp\htdocs\GITHUB\Web Technology\Assignments\Assignment 7\project2
"
    ServerName project2.local
</VirtualHost>
 
 ```



 Go to path `C:\Windows\System32\drivers\etc` to edit `host` file  

            note : Your system cannot allow yo to edit directly there so make sure that you copy it to different location and have an extra original copy in any case
            
Let edit :
```
# localhost name resolution is handled within DNS itself.
# 127.0.0.1       localhost
# ::1             localhost

# lets resolve ip to localhost first
 127.0.0.1       localhost
 # And then the ip's to our costom domain
  127.0.0.1       project1.local
 127.0.0.1       project2.local



```

Now the previous project url wont work and type the new url you config to 
At me i have two urls       `project1.local` & `project2.local` Working 

