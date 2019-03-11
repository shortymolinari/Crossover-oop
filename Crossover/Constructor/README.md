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
1. Instanciar la clase, el constructor llama a un método que imprime datos en pantalla, estos se imprimen automáticamente sin ningún otro llamado y sin problema => **Ok**
2. Llamar un método igual que la clase no lo convierte en un constructor (Desde PHP 5.3.3)


#### Clase con método constructor (visibility)
1. Instanciar la clase, el constructor es private => **Fatal error**
2. Instanciar la clase, el constructor es protected => **Fatal error**
3. Instanciar la clase, el constructor es public llama un método private => **Ok**
4. Instanciar la clase, el constructor es public llama un método protected => **Ok**


### Skills.php

#### Clase extiende y tiene constructor propio
1. Instanciar la clase, sobre escribir el constructor => **Ok**
2. Instanciar la clase, invocar al constructor padre sin parámetros requeridos => **Fatal error**
3. Instanciar la clase, invocar al constructor padre con parámetros requeridos incompletos => **Fatal error**
4. Instanciar la clase, invocar al constructor padre con parámetros requeridos con valor por defecto incompletos => **Ok**
5. Instanciar la clase, invocar al constructor padre con parámetros requeridos => **Ok**
6. Instanciar la clase, invocar al constructor padre y pasarle más parámetros de los requeridos => **Ok**


### Extends.php

#### Clase extiende (test visibility)
1. Acceder propiedad protected heredada dentro de la clase => **Ok**
2. Instanciar la clase, acceder propiedad protected heredada desde objeto => **Fatal error**
3. Instanciar la clase, acceder propiedad protected del padre llamando un método público heredado del padre desde objeto => **Ok**
4. Acceder propiedad private del padre dentro de la clase => **PHP Notice: Undefined property**
5. Instanciar la clase, acceder propiedad private del padre desde objeto => **PHP Notice: Undefined property**
6. Acceder propiedad private del padre llamando un método público heredado del padre dentro de la clase => **Ok**
7. Instanciar la clase, acceder propiedad private del padre llamando un método público heredado del padre desde objeto => **Ok**


### \#Others

#### Clase con constructor extiende. El padre tiene constructor que requiere parámetros
1. Instanciar la clase, pasarle todos los parámetros y luego cambiar propiedades que solo tiene la clase padre => **OK, se logran cambiar los valores del padre**

#### Clase con constructor sin parámetros (Clases regulares)
1. Instanciar una clase con constructor => **Ok, se ejecuta el constructor**
2. Instanciar una clase vacía que extiende un clase con constructor => **Ok, se ejecuta el constructor del padre**
3. Instaciar una clase y llamar el constructor del padre desde un método propio => **Se ejecuta el constructor del padre**
4. Instaciar una clase sobre escribir el constructor y llamar el constructor del padre desde un método propio =>
**Solo se puede invocar el constructor del padre al llamar el método propio que implementa *parent::__construct()***







