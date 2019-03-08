### \#Constructor

---

1. Extender una clase con un constructor

   - Sobreescribir el constructor y no usar `parent::\_\_construct`

     - Llamar un método heredado que imprime propiedades que incializa el constructor padre => **Ok**

     - Sobreescribir un método heredado que imprime propiedades que incializa el constructor padre e imprime propiedades que inicializa el constructor del hijo => **Ok**

---

2. Extender una clase con un constructor

   - Sobreescribir el constructor y usar `parent::\_\_construct` sin pasarle parámetros

     - Llamar un método heredado que imprime propiedades que incializa el constructor padre => **Faltal error** _\*necesita los parámetros_

---

3. Extender una clase con un constructor que recibe parametros

   - Instanciar el padre con parametros e instanciar la clase que extiende y tratar de acceder a las propiedades de la clase padre **No sale error, pero no muestra nada**

   - Instanciar la clase que extiende y pasarle los parametros que debe recibir el padre
