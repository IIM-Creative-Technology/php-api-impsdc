## Set up data

Create your .env with your db config

Migrate tables
`
    php artisan migrate
`

And then create seeders
`
    php artisan db:seed
`

### Url for Auth

`       
    /api/auth/login
`

After sending the corresponding credentials generated with seeders you got a token.
With Postman this token need to be in authorization with the type "Bearer Token" 

### Url for promo

```
   GET      /api/promo
   POST     /api/promo/create
   GET      /api/promo/{id}
   PUT      /api/promo/edit/{id}
   DELETE   /api/promo/delete/{id}
```

### Url for student

Method GET return corresponding Note and Promo of a student
```
   GET      /api/student
   POST     /api/student/create 
   GET      /api/student/{id}
   PUT      /api/student/edit/{id}
   DELETE   /api/student/delete/{id}
```

### Url for Intervenant

```
   GET      /api/intervenant
   POST     /api/intervenant/create
   GET      /api/intervenant/{id}
   PUT      /api/intervenant/edit/{id}
   DELETE   /api/intervenant/delete/{id}
```

### Url for Cours

Method GET return corresponding Intervenant and Promo of a cours
```
   GET      /api/cours
   POST     /api/cours/create
   GET      /api/cours/{id}
   PUT      /api/cours/edit/{id}
   DELETE   /api/cours/delete/{id}
```

### Url for Note

```
   GET      /api/note
   POST     /api/note/create
   GET      /api/note/{id}
   PUT      /api/note/edit/{id}
   DELETE   /api/note/delete/{id}
```

