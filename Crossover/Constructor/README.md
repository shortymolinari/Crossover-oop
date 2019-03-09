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


------

### Person.php

#### Clase con método constructor que requiere parámetros
1. Instanciar la clase sin pasar parámetros => **Fatal error**
2. Instanciar la clase con parámetros incompletos => **Fatal error**
3. Instanciar la clase con parámetros completos => **Ok**

#### Clase con método constructor
1. Instanciar la clase, el constructor llama a un método que inprime datos en pantalla, estos se imprimen automaticamente sin ningun otro llamdo y sin problema => **Ok**
2. Llamar un método igual que la clase no lo convierte en un constructor (Desde PHP 5.3.3)


#### Clase con método constructor (visibility)
1. Instanciar la clase, el constructor es private => **Fatal error**
2. Instanciar la clase, el constructor es protected => **Fatal error**
3. Instanciar la clase, el constructor es public llama un método private => **Ok**
4. Instanciar la clase, el constructor es public llama un método protected => **Ok**


### Skills.php

#### Clase extinde y tiene constructor propio
1. Instanciar la clase, sobreescribir el constructor => **Ok**
2. Instanciar la clase, invocar al constructor padre sin parámatros requeridos => **Fatal error**
3. Instanciar la clase, invocar al constructor padre con parámatros requeridos incompletos => **Fatal error**
4. Instanciar la clase, invocar al constructor padre con parámatros requeridos con valor por defecto incompletos => **Ok**
5. Instanciar la clase, invocar al constructor padre con parámatros requeridos => **Ok**
6. Instanciar la clase, invocar al constructor padre y pasarle más parámatros de los requeridos => **Ok**


### Extends.php

#### Clase extinde (test visibility)
1. Acceder propiedad protected heredada dentro de la clase => **Ok**
2. Instanciar la clase, acceder propiedad protected heredada desde objeto => **Fatal error**
3. Instanciar la clase, acceder propiedad protected del padre llamando un método público heredado del padre desde objeto => **Ok**

4. Acceder propiedad private del padre dentro de la clase => **PHP Notice: Undefined property**
5. Instanciar la clase, acceder propiedad private del padre desde objeto => **PHP Notice: Undefined property**
6. Acceder propiedad private del padre llamando un método público heredado del padre dentro de la clase => **Ok**
7. Instanciar la clase, acceder propiedad private del padre llamando un método público heredado del padre desde objeto => **Ok**






