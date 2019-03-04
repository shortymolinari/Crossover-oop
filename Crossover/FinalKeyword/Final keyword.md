### \#Final Keyword

---

PHP 5 introduce la nueva palabra clave final, que impide que las clases hijas sobrescriban un método,
antecediendo su definición con final. Si la propia clase se define como final, entonces no se podrá heredar de ella.

**_Nota:_**
**_Las propiedades no pueden declararse como final. Sólo pueden las clases y los métodos._**

1. Declarando una calse como final => **OK**
2. Declarando una propiedad como final => **Fatal error**
3. Declarando una propiedad estática como final => **Fatal error**
4. Instanciar una clase final => **OK**
5. Llamando un método final desde un objeto instaciado de clase final => **OK**
6. Llamando un método estático final desde un objeto instaciado de clase final por medio de operador (->) => **OK**
7. Llamando un método estático final de forma estática por medio de clase final => **OK**
8. Asignando el nombre de la clase a una varible y llamar un metodo estático de forma estática => **OK**
9. Asignando el nombre de la clase a una varible e imprimir valor de constante => **OK**
10. Asignando el nombre de la clase a una varible e imprimir valor de una propiedad estática => **OK**
11. Extender una clase final => **Fatal error**
12. Heredar un método final => **OK**
13. Sobreescibir un método final => **Fatal error**
14. Sobreescribir un método final desde un trait => **Fatal error**
