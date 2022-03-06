<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UNIDAD 1

        // $nuevapost = new Post();
        // $nuevapost -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        // $nuevapost -> resultado_de_aprendizaje = "";
        // $nuevapost -> contenido = "Sockets";
        // $nuevapost -> informacion = "i";
        // $nuevapost -> imagen = "i";
        // $nuevapost -> save();

        $nuevapost1 = new Post();
        $nuevapost1 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost1 -> resultado_de_aprendizaje = "Reconocer los conceptos de sistemas de información";
        $nuevapost1 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost1 -> informacion = "-	Un sistema de información es un conjunto de componentes que interactúan entre sí con un fin común.
        En informática, los sistemas de información ayudan a administrar, recolectar, recuperar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización.
        La importancia de un sistema de información radica en la eficiencia en la correlación de una gran cantidad de datos ingresados a través de procesos diseñados para cada área con el objetivo de producir información válida para la posterior toma de decisiones.
        Un sistema de información se destaca por su diseño, facilidad de uso, flexibilidad, mantenimiento automático de los registros, apoyo en toma de decisiones críticas y mantener el anonimato en informaciones irrelevantes.
        Todos estos elementos interactúan para procesar los datos (incluidos los procesos manuales y automáticos) y dan lugar a información más elaborada, que se distribuye de la manera más adecuada posible en una determinada organización
        ";
        $nuevapost1 -> imagen = "img1";
        $nuevapost1 -> save();

        $nuevapost2 = new Post();
        $nuevapost2 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost2 -> resultado_de_aprendizaje = "Reconocer la evolución de los sistemas de informació";
        $nuevapost2 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost2 -> informacion = "1950 – 1960: procesamiento de datos electrónicos, sistema de procesamiento de transacciones
        Durante este período, el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. SI se utilizó principalmente para el procesamiento electrónico de datos.        
        EDP se describe como el uso de computadoras para registrar, clasificar, manipular y resumir datos. También se llama procesamiento de información o procesamiento de datos automático.
        Sistema de procesamiento de transacciones (TPS) fue el primer sistema computarizado desarrollado para procesar datos comerciales. TPS estaba principalmente dirigido al personal administrativo de una organización. El TPS inicial utilizaba datos de procesamiento por lotes que se acumularon durante un período y todas las transacciones se procesaron posteriormente.
        TPS recopila, almacena, modifica y recupera las transacciones diarias de una organización. Por lo general, TPS informatiza o automatiza un proceso manual existente para permitir un procesamiento más rápido, un mejor servicio al cliente y costos administrativos reducidos. Ejemplos de productos de TPS son los depósitos en efectivo, el cajero automático (ATM), la orden de pago y los sistemas contables. TPS también se conoce como procesamiento de transacciones o procesamiento en tiempo real.
        1960 a 1970: Sistemas de información gerencial
        Durante esta era, el rol de SI evolucionó desde TPS hasta Management Information Systems (MSI) o Sistemas de información gerenciales. MSI procesa los datos en informes informativos útiles y proporciona a los gerentes las herramientas para organizar evaluar y administrar de manera eficiente los departamentos dentro de una organización. MSI entrega información en forma de pantallas e informes preespecificados para respaldar la toma de decisiones empresariales. Algunos ejemplos de resultados de MSI son los sistemas de informes de tendencias de costos, análisis de ventas y rendimiento de producción.
        Por lo general, MSI genera tres tipos básicos de información que son:
        Los informes detallados de información típicamente confirman las actividades de procesamiento de transacciones. Un informe de pedido detallado es un ejemplo de informe detallado.
        La información resumida establece datos en un formato que un individuo puede revisar rápido y fácilmente.
        Información mediante el filtrado de datos es uno de excepción. Los informes de excepciones ayudan a los gerentes a ahorrar tiempo porque no tienen que buscar en un informe detallado las excepciones.
        Este período también marcó el desarrollo cuando el enfoque de las organizaciones cambió lentamente de la mera automatización de los procesos comerciales básicos a la consolidación del control dentro de la función de procesamiento de datos. 
        1970 a 1980: Sistemas de soporte de decisiones
        En esta era, un avance importante fue la introducción de las computadoras personales (PC). Con la introducción de las PC, se produjo la distribución de la potencia informática o de procesamiento en toda la organización. La función de SI está fuertemente asociada con la administración en lugar de un enfoque técnico en una organización. El papel se centró en el “sistema interactivo basado en computadoras” para ayudar a los responsables de la toma de decisiones a resolver problemas.
        Este nuevo rol de los sistemas de información para proporcionar soporte ad-hoc interactivo para el proceso de toma de decisiones a los gerentes y otros profesionales de negocios se denomina Sistemas de Soporte de Decisiones (DSS). DSS sirve el nivel de planificación, gestión y operaciones de una organización, por lo general, la alta dirección.
        DSS usa datos de fuentes internas y / o externas. Las fuentes internas de datos pueden incluir datos de inventario, ventas, fabricación o financieros de la base de datos de una organización. Las fuentes externas podrían incluir precios, tasas de interés, población o tendencias. Los gerentes usan DSS para manipular los datos y ayudar con las decisiones. Los ejemplos de DSS son cifras de ingresos proyectadas basadas en suposiciones de ventas de nuevos productos, precios de productos y sistemas de análisis de riesgos.
        1980 a 1990: Sistemas de información ejecutivo
        Este período dio lugar a la informática departamental debido a que muchas organizaciones compran su propio hardware y software para satisfacer sus necesidades departamentales. En lugar de esperar el apoyo indirecto del departamento de servicio corporativo centralizado, los empleados podrían usar sus propios recursos para respaldar sus requisitos laborales. Esta tendencia dio lugar a nuevos desafíos de incompatibilidad de datos, integridad y conectividad en diferentes departamentos. Además, los altos ejecutivos no usaban DSS ni MSI, por lo que se desarrollaron sistemas de información ejecutivo (ESI) o sistemas de soporte ejecutivo (ESS).
        ESI ofrece servicios de toma de decisiones a los ejecutivos a través del suministro de informaci��n interna y externa relevante para cumplir los objetivos estratégicos de la organización. A veces se consideran como una forma específica de DSS. Los ejemplos del ESI son sistemas para facilitar el acceso a las acciones de todos los competidores, desarrollos económicos para respaldar la planificación estratégica y el análisis del desempeño del negocio.
        1990 a 2000: Sistemas de gestión del conocimiento
        Durante esta era, el rápido crecimiento de las intranets, extranets, internet y otras redes globales interconectadas cambiaron drásticamente las capacidades de SI en los negocios. Se hizo posible circular el conocimiento a diferentes partes del mundo independientemente del tiempo y el espacio.
        Este período también vio una aparición de sistemas de planificación de recursos empresariales (ERP). ERP es una forma específica de organización de un sistema de información estratégica que incorpora todos los componentes de una organización, incluidas la fabricación, las ventas, la gestión de recursos, la planificación de recursos humanos y el marketing.
        Además, hubo un avance en el desarrollo y la aplicación de técnicas de inteligencia artificial (IA) a los sistemas de información comercial. Sistemas expertos (ES) y sistemas de gestión del conocimiento (KMS) interconectados entre sí.
        Los sistemas expertos (ES) son un sistema informático que imita la capacidad de toma de decisiones de los expertos humanos. Por ejemplo, sistemas que hacen predicciones financieras, diagnostican enfermedades humanas y programan rutas para vehículos de reparto. El sistema de gestión del conocimiento (KMS) es un sistema de TI que almacena y recupera conocimiento para apoyar la creación, organización y diseminación del conocimiento empresarial dentro de la empresa. Los ejemplos de KMS son la base de datos de retroalimentación y los sistemas de mesa de ayuda.
        ES utiliza datos de los Sistemas de Gestión del Conocimiento para generar un resultado deseable del sistema de información, por ejemplo, un sistema de aprobación de solicitudes de préstamo.
        2000 – presente: E-Business
        Internet y las tecnologías y aplicaciones relacionadas cambiaron la forma en que operan las empresas y las personas trabajan. Las funciones de los sistemas de información en este período siguen siendo las mismas que hace 50 años: mantenimiento de registros, gestión de informes, procesamiento de transacciones, gestión de soporte y procesos de gestión de la organización. Se usa para respaldar el proceso comercial, la toma de decisiones y las ventajas competitiva.
        La diferencia es una mayor conectividad entre los componentes del sistema similares y diferentes. Existe una gran infraestructura de red, un mayor nivel de integración de funciones en todas las aplicaciones y potentes máquinas con mayor capacidad de almacenamiento. Muchas empresas usan tecnologías de Internet y procesos de negocio habilitados para la web para crear aplicaciones innovadoras de comercio electrónico.
        ";
        $nuevapost2 -> imagen = "img2";
        $nuevapost2 -> save();

        $nuevapost3 = new Post();
        $nuevapost3 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost3 -> resultado_de_aprendizaje = "Definir el los conceptos de cliente y servidor";
        $nuevapost3 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost3 -> informacion = "-	La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.
        Algunos ejemplos de aplicaciones que usen el modelo cliente-servidor son el Correo electrónico, un Servidor de impresión y la World Wide Web.
        En esta arquitectura la capacidad de proceso está repartida entre los clientes y los servidores, aunque son más importantes las ventajas de tipo organizativo debidas a la centralización de la gestión de la información y la separación de responsabilidades, lo que facilita y clarifica el diseño del sistema.
        La separación entre cliente y servidor es una separación de tipo lógico, donde el servidor no se ejecuta necesariamente sobre una sola máquina ni es necesariamente un solo programa. Los tipos específicos de servidores incluyen los servidores web, los servidores de archivo, los servidores del correo, etc. Mientras que sus propósitos varían de unos servicios a otros, la arquitectura básica seguirá siendo la misma.
        Una disposición muy común son los sistemas multicapa en los que el servidor se descompone en diferentes programas que pueden ser ejecutados por diferentes computadoras aumentando así el grado de distribución del sistema.
        La red cliente-servidor es una red de comunicaciones en la cual los clientes están conectados a un servidor, en el que se centralizan los diversos recursos y aplicaciones con que se cuenta; y que los pone a disposición de los clientes cada vez que estos son solicitados
        ";
        $nuevapost3 -> imagen = "img3";
        $nuevapost3 -> save();

        $nuevapost4 = new Post();
        $nuevapost4 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost4 -> resultado_de_aprendizaje = "Definir los sistemas de computadoras centrales y dedicadas";
        $nuevapost4 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost4 -> informacion = "La capacidad de una computadora central se define tanto por la velocidad de su CPU como por su gran memoria interna, su alta y gran capacidad de almacenamiento externo, sus resultados en los dispositivos E/S rápidos y considerables, la alta calidad de su ingeniería interna que tiene como consecuencia una alta fiabilidad y soporte técnico caro pero de alta calidad. Una computadora central puede funcionar durante años sin problemas ni interrupciones y las reparaciones de este pueden ser realizadas mientras está funcionando. Los vendedores de computadoras centrales ofrecen servicios especiales; por ejemplo, si se rompe la computadora, el vendedor ejecutará las aplicaciones de su cliente en sus propias computadoras sin que los usuarios lo noten mientras que duran las reparaciones. A menudo, las computadoras centrales soportan miles de usuarios de manera simultánea que se conectan mediante terminal como el centro de operaciones de muchos terminales virtuales, puede ofrecer la potencia necesaria para que dichas computadoras operen de manera eficiente, pero también la flexibilidad de las redes de computadoras personales. ";
        $nuevapost4 -> imagen = "img4";
        $nuevapost4 -> save();

        $nuevapost5 = new Post();
        $nuevapost5 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost5 -> resultado_de_aprendizaje = "Definir los sistemas de conexión libre y a través de redes";
        $nuevapost5 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost5 -> informacion = "Una conexión de red designa la conexión entre un equipo informático (en el sentido ETD, es decir, un ordenador, una impresora, etc.) y una red informática.
        Se puede interpretar en varios niveles correspondientes a las capas bajas del modelo OSI:
        Puede tratarse de una conexión física (véase Capa física): el equipo considerado está en interacción eléctrica (mediante un cable de red coaxial o de par trenzado) o electromagnética (ondas de radio, infrarrojas, etc.) con los demás equipos de la red.
        Puede tratarse de una conexión lógica en el sentido de que los equipos conectados disponen del conjunto de protocolos de red necesario para, una vez activados, comunicarse entre sí. Por ejemplo, el equipo considerado tiene acceso a la red local, y, al activar protocolos superiores, puede conectarse a una red mayor, como Internet (véase Conexión a Internet). 
        ";
        $nuevapost5 -> imagen = "img5";
        $nuevapost5 -> save();

        $nuevapost6 = new Post();
        $nuevapost6 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost6 -> resultado_de_aprendizaje = "Describir los sistemas con arquitectura  Cliente/Servidor";
        $nuevapost6 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost6 -> informacion = "En la arquitectura C/S el remitente de una solicitud es conocido como cliente. Sus características son:
        •	Es quien inicia solicitudes o peticiones, tiene por tanto un papel activo en la comunicación (dispositivo maestro o amo).
        •	Espera y recibe las respuestas del servidor.
        •	Por lo general, puede conectarse a varios servidores a la vez.
        •	Normalmente interactúa directamente con los usuarios finales mediante una interfaz gráfica de usuario.
        Al receptor de la solicitud enviada por el cliente se le conoce como servidor. Sus características son:
        •	Al iniciarse espera a que lleguen las solicitudes de los clientes, desempeña entonces un papel pasivo en la comunicación (dispositivo esclavo).
        •	Tras la recepción de una solicitud, la procesa y luego envía la respuesta al cliente.
        •	Por lo general, acepta las conexiones de un gran número de clientes (en ciertos casos el número máximo de peticiones puede estar limitado).
        En la arquitectura C/S las características generales son:
        •	El Cliente y el Servidor pueden actuar como una sola entidad y también pueden actuar como entidades separadas, realizando actividades o tareas independientes.
        •	Las funciones de Cliente y Servidor pueden estar en plataformas separadas, o en la misma plataforma.
        •	Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los Clientes o de los Servidores, ya sean por actualización o por reemplazo tecnológico, se realizan de una manera transparente para el usuario final.
        •	La interrelación entre el hardware y el software está basada en una infraestructura poderosa, de tal forma que el acceso a los recursos de la red no muestra la complejidad de los diferentes tipos de formatos de datos y de los protocolos.
        •	Su representación típica es un centro de trabajo (PC), en donde el usuario dispone de sus propias aplicaciones de oficina y sus propias bases de datos, sin dependencia directa del sistema central de información de la organización.
        Los servidores pueden ser apátridas o stateful. Un servidor apátrida no guarda ninguna información entre las peticiones. Un servidor stateful puede recordar la información entre las peticiones. El alcance de esta información puede ser global o sesión-específico. Un servidor de HTTP para las páginas estáticas HTML es un ejemplo de un servidor apátrida, mientras que Apache Tomcat es un ejemplo de servidor stateful.
        La interacción entre el cliente y el servidor se describe a menudo usando diagramas de secuencia. Los diagramas de secuencia se estandarizan en el UML. Es importante que los clientes no interactúen entre sí ni que lo hagan clientes de capas bajas hacia otros de capas más altas, por eso todo tiene que pasar por el servidor.
        Otro tipo de arquitectura de red se conoce como arquitectura de par-a-par porque cada nodo o caso del programa es un “cliente” y un “servidor” y cada uno tiene responsabilidades equivalentes. Ambas arquitecturas están en uso amplio
        ";
        $nuevapost6 -> imagen = "img6";
        $nuevapost6 -> save();

        $nuevapost7 = new Post();
        $nuevapost7 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost7 -> resultado_de_aprendizaje = "Reconocer protocolos de comunicación en red";
        $nuevapost7 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost7 -> informacion = "Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP.
        Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través de los sitios, enviar correos electrónicos, escuchar música online, etc.
        Existen varios tipos de protocolos de red:
        •	Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.
        •	Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.
        •	Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.
        Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior comúnmente se les denomina familia de protocolos.
        El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red específicas. Este Sistema de Interconexión Abierto tiene por objetivo establecer un contexto en el cual basar las arquitecturas de comunicación entre diferentes sistemas.
        ";
        $nuevapost7 -> imagen = "img7";
        $nuevapost7 -> save();

        $nuevapost8 = new Post();
        $nuevapost8 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost8 -> resultado_de_aprendizaje = "Clasificar los sistemas de información de acuerdo a su arquitectura";
        $nuevapost8 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost8 -> informacion = "1.	Los sistemas de dos niveles: archivo — servidor. Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.
        2.	Los sistemas de dos niveles: cliente — servidor, donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar númerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente.
        3.	Los sistemas de muchos niveles, donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.
        ";
        $nuevapost8 -> imagen = "img8";
        $nuevapost8 -> save();

        $nuevapost9 = new Post();
        $nuevapost9 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost9 -> resultado_de_aprendizaje = "Explicar el proceso de diagramación de componentes de la arquitectura  Cliente/Servidor";
        $nuevapost9 -> contenido = "Introducción a la arquitectura  Cliente/Servidor";
        $nuevapost9 -> informacion = "El Unified Modeling Language (en castellano, lenguaje de modelación unificado) es la norma ISO de aplicación general para el desarrollo de software y arquitecturas de sistemas complejos. Este lenguaje de modelado, abreviado como “UML”, utiliza diferentes tipos de diagramas para los procesos de planificación y desarrollo en la programación orientada a objetos.
        En la versión actual (UML 2.5) se clasifican 14 tipos de diagramas, que se dividen a grandes rasgos en diagramasde comportamiento y diagramas estructurales. Este último subgrupo incluye los diagramas de componentes. Aquí te contamos en qué consisten y utilizamos un ejemplo concreto para ilustrar cómo crear un diagrama de componentes. Además, aprenderás para qué se utilizan los diagramas de componentes UML.
        ";
        $nuevapost9 -> imagen = "img9";
        $nuevapost9 -> save();

        $nuevapost10 = new Post();
        $nuevapost10-> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost10 -> resultado_de_aprendizaje = "Reconocer los componentes del modelo  Cliente/Servidor";
        $nuevapost10 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost10 -> informacion = "Tipos de modelo cliente servidor
        Cada modelo de cliente servidor es instalado en función de las necesidades de cada unidad cliente, o simplemente por requerimientos de la organización. Estas estructuras son llamadas modelos de arquitectura. En ellas se busca de adaptar el proceso de comunicación cliente servidor en función de la forma en la cual una empresa determinada requiera utilizar ciertos servicios.
        De manera que la arquitectura es la conformación de cómo el servidor va a distribuir los procesos y a quienes van a recibir para poder procesar la información. Puedes ampliar esta información leyendo el articulo Tipos de topologías de red y sus características.
        Dos capas
        Este tipo de arquitectura se utiliza para establecer el modelo de cliente servidor donde el mismo solicita los recursos y el servidor responde directamente a esa solicitud. Este tipo de estructura modelo permite otorgar privilegios donde el servidor no requiere incluso de utilizar una aplicación previa para proporcionar el servicio.
        Tres capas
        Consiste en un modelo cliente servidor en el cual se determina un nivel intermedio. Es decir la arquitectura del cliente es compartida con otro cliente que también solicita recursos al servidor. Está solicitud viene administrada por una interfaz de usuario que sirve de base para el uso de los recursos a través de internet.
        La capa central que se encuentra entre las dos principales, es llamada software intermedio. Cumple el rol de otorgar recursos ilimitados a otro servidor para poder procesarlos. La tercera capa ejerce la función de implementar las aplicaciones de datos necesarios. Agilizando de esta forma el procedimiento para que el servicio se gestiona con eficiencia.
        De varias capas
        En las arquitecturas anteriores cada capa realiza una función específica. En el caso de la arquitectura de varias capas, el modelo cliente servidor necesita la ayuda de otros servidores para poder ejecutar
        ";
        $nuevapost10 -> imagen = "img10";
        $nuevapost10 -> save();

        $nuevapost11 = new Post();
        $nuevapost11 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost11 -> resultado_de_aprendizaje = "Definir el concepto de programa maestro";
        $nuevapost11 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost11 -> informacion = "El plan Maestro de Producción se encarga de ayudar a las empresas a mejorar y definir correctamente su capacidad productiva. Esto es gracias a la posibilidad de cruzar los datos obtenidos de cantidades de pedidos con el tiempo disponible, así como con el número de máquinas y personas disponibles.";
        $nuevapost11 -> imagen = "img11";
        $nuevapost11 -> save();

        $nuevapost12 = new Post();
        $nuevapost12 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost12 -> resultado_de_aprendizaje = "Explicar los procesos y tareas del programa maestro";
        $nuevapost12 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost12 -> informacion = "El programa maestro de producción (MPS)  es un término que se utiliza para describir un documento centralizado que le indica qué necesita producir, cuánto necesita producir y cuándo debe producirlo. En resumen, todo lo relacionado con la producción en su negocio, incluidos los plazos, como su  tiempo de fabricación .
        Aquí hay una descripción general rápida de los pasos del proceso del programa maestro de producción que deberá seguir al armar esto:
        Mapee su demanda y haga un plan de demanda
        Elabore las materias primas que necesita y ponga en marcha su cadena de suministro con los procesos de planificación de la producción.
        Ahora está listo para desarrollar una propuesta de programa de producción maestro. Esto es como un borrador para ver si su MPS es viable
        Utilice una técnica de planificación de capacidad aproximada para calcular si puede cumplir con su MPS propuesto. Continúe utilizando esta técnica para evaluar continuamente si su capacidad puede satisfacer la demanda cuando su programa maestro de producción esté en acción.
        Si su propuesta de programa maestro de producción es viable, entonces la evalúa con respecto al servicio al cliente, el uso efectivo de los recursos y la inversión en inventario.
        Una vez que se implementa su MPS, todos los miembros del personal de su taller tienen claro lo que se debe producir cada semana. Su programa maestro de producción asegura que todos en su negocio trabajen hacia el mismo objetivo.
        El programador maestro puede entonces pronosticar las relaciones entre la demanda y su oferta y saber cuándo necesita aumentar o disminuir la producción.
        El programa maestro de producción es una entrada crucial en el plan de operaciones agregadas, que brinda una descripción general de todo lo que su empresa necesita hacer para completar el pedido al 100%.
        Se trata de producir pedidos de cliente y hacer que se entreguen a tiempo, sin problemas ni defectos. Esto se conoce como un pedido perfecto, y es por lo que todas las empresas deben esforzarse en todos sus canales de venta.
        El propósito de un programa de producción maestro es ahorrarle tiempo al hacer que las horas que dedica a administrar su producción fluyan de manera mucho más eficiente, lo que le brinda más espacio para  escalar su negocio de fabricaci��n .
        Una vez que comprenda el objetivo final de MPS, puede darse cuenta de que los otros objetivos del programa maestro de producción están alineados para lograr este objetivo.
        Las otras  funciones de un programa maestro de producción  son:
        Traducción de planes de producción
        ¿Cómo gestionará las operaciones para lograr un equilibrio entre la demanda, los requisitos laborales y la capacidad del equipo? El programa maestro de producción lo ayudará a determinar cuántos artículos necesita producir dentro de un período específico.
        Evaluación de horarios alternativos
        Un programa maestro de producción debe considerar múltiples rutas de fabricación, para ver cuál es la más eficiente y tener en cuenta cualquier problema que pueda ocurrir a lo largo de una línea de producción.
        Requisitos de capacidad de producción
        La planificación de la capacidad de corte preliminar  con su programa maestro de producción lo ayuda a determinar la capacidad realista que necesita para satisfacer la demanda, aumentar las ganancias y minimizar sus costos.
        Facilitar el procesamiento de la información
        El MPS le ayuda a establecer sus  puntos de reorden  para realizar las entregas que deben realizarse. Puede hacerlo mediante la coordinación de diferentes sistemas de información de gestión, como marketing, finanzas y otros.
        ";
        $nuevapost12 -> imagen = "img12";
        $nuevapost12 -> save();

        $nuevapost13 = new Post();
        $nuevapost13 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost13 -> resultado_de_aprendizaje = "Describir los tipos de servidores";
        $nuevapost13 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost13 -> informacion = "1. Servidor de email
        Uno de los más antiguos que encontraremos en esta lista. Funciona como una especie de oficina de correo para almacenar, recibir, enviar y permitir múltiples operaciones que tienen que ver con el correo personal de los clientes.
        Son programados para responder efectivamente ante requisitos de los clientes en cuanto al tipo de correo que reciben o envían. Asimismo, estos tienen subtipos:
        •	POP3: retienen los emails recibidos hasta que el usuario los abre, momento en que son enviados al dispositivo (computadora, teléfono, tablet).
        •	IMAP: permite interactuar con la información recibida como un mensaje de email, pero sin descargarla en el equipo. Gracias a ellos, es posible las vistas previas para poder organizarlos, descargarlos o eliminarlos.
        •	SMTP: administran todos los emails salientes. Funcionan con una combinación entre POP3 y IMAP.
        Los servidores de email son de los más comunes en el mercado, gracias a la popularidad que tiene el correo electrónico en nuestra vida, debido a su eficacia en términos informativos y de gestión.
        2. Servidor web
        Tras casi 28 años de Internet, según El Tiempo, existen más de 1.7 mil millones de páginas web, y cada una de ellas debe estar almacenada dentro de un servidor.
        Un servidor web se ocupa de guardar la información en formato HTML de los sitios, donde se incluye texto, imágenes, videos y todo tipo de datos. Mediante un explorador web, los usuarios puedan visualizar todo esto en sus pantallas.
        Los servidores web también pueden ser:
        •	Apache: el más común de todos, es un sistema multiplataforma que brinda estabilidad y seguridad.
        •	Microsoft IIS: solo funciona para sistemas Windows y permite convertir una computadora en un servidor web a menor escala.
        •	Sun Java System Web Server: servidor de código abierto, para tecnologías como PHP, JSP, entre otras.
        •	Lighttpd: muy ligero y rápido, está diseñado para entornos donde se necesita la velocidad.
        •	Servidores virtuales: te brindan la posibilidad de optimizar costos en hardware, puesto que otorgan flexibilidad para accionar varios sistemas operativos y programas a la vez.
        Todos ellos se comunican entre sí con otros servidores mediante el protocolo HTTP, para brindar estabilidad y rapidez en la transmisión de datos.
        3. Servidor de base de datos
        Son dispositivos diseñados para almacenar grandes cúmulos de información y poder gestionar los datos uno por uno.
        También son capaces de analizar, manipular y alojar los datos de acuerdo a los requerimientos del usuario.
        4. Servidores cloud
        Estos sirven para compañías que se dedican a rentar un espacio en sus servidores para que otras personas o empresas guarden la información de manera remota. Sirven para almacenar grandes cantidades de datos y así proteger la información de las organizaciones o personas naturales.
        Generalmente es utilizada como una “caja fuerte” de información, ya que los proveedores garantizan, además del acceso inmediato, el resguardo de los datos ante pérdidas o fugas.
        5. Servidor DNS
        Están encargados de gestionar los nombres de los dominios de las páginas web. Es decir, su trabajo es crear un vínculo entre el dominio del sitio con su IP (un conjunto de números que identifica jerárquica y lógicamente una interfaz en red a un dispositivo).
        De esta manera, cuando se escribe un dominio en un explorador, el servidor lee este requerimiento y regresa la información de la interfaz de la página.
        6. Servidor Telnet
        Utilizado principalmente en las telecomunicaciones, es un protocolo de red que le permite a los usuarios gestionar, enviar y recibir datos para solucionar problemas con las redes relacionadas con la telefonía.
        Asimismo, almacena los datos de los mensajes de voz, contestadoras, encima las llamadas y controla la red del Internet móvil.
        7. Servidor SIP
        Es conocido como Proxy SIP y su trabajo es establecer la conexión para llamadas telefónicas por Internet. El mismo no transmite audio ni video; únicamente almacenan la dirección IP para generar la comunicación con otro usuario.
        8. Servidor FTP
        Es un servidor que está conectado a Internet que permite la posibilidad de transferir archivos y datos entre otros ordenadores y servidores.
        9. Servidor del acceso remoto (RAS)
        Vigila las líneas de módem de los ordenadores u otros medios de comunicación de Internet, de manera tal que los requerimientos conecten con la red en forma remota, contesta llamadas e interviene la petición de la red.
        10. Servidor compartido
        Otorgan espacio para guardar información y al mismo tiempo comparte recursos con la memoria RAM, el CPU, el sistema operativo, la conectividad a Internet y la dirección IP.
        Este servidor se usa para recibir requerimientos de muchos clientes. La única desventaja es que los usuarios del servidor compartido no pueden realizar muchas peticiones al mismo tiempo, ya que no es suficientemente rápido.
        Como puedes ver, los distintos tipos de servidores se extienden, básicamente, a casi todas las tareas de almacenamiento, transmisión y alojamiento de datos que se ejecutan en la red.
        ";
        $nuevapost13 -> imagen = "img13";
        $nuevapost13 -> save();

        $nuevapost14 = new Post();
        $nuevapost14 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost14 -> resultado_de_aprendizaje = "Reconocer las características de la arquitectura  Cliente/Servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad";
        $nuevapost14 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost14 -> informacion = "Un sistema Cliente/Servidor es un Sistema de Información distribuido basado en las siguientes características:
        Servicio: unidad básica de diseño. El servidor los proporciona y el cliente los utiliza.
        Recursos compartidos: Muchos clientes utilizan los mismos servidores y, a través de ellos, comparten tanto recursos lógicos como físicos.
        Protocolos asimétricos: Los clientes inician “conversaciones”. Los servidores esperan su establecimiento pasivamente.
        Transparencia de localización física de los servidores y clientes: El cliente no tiene por qué saber dónde se encuentra situado el recurso que desea utilizar.
        Independencia de la plataforma HW y SW que se emplee.
        Sistemas débilmente acoplados. Interacción basada en envío de mensajes.
        Encapsulamiento de servicios. Los detalles de la implementación de un servicio son transparentes al cliente.
        Escalabilidad horizontal (añadir clientes) y vertical (ampliar potencia de los servidores).
        Integridad: Datos y programas centralizados en servidores facilitan su integridad y mantenimiento.
        En el modelo usual Cliente/Servidor, un servidor, (daemon en la terminología sajona basada en sistemas UNIX/LINUX, traducido como “demonio”) se activa y espera las solicitudes de los clientes.
        Lo normal es que los servicios de un mismo servidor puedan ser utilizados por múltiples clientes distintos. Tanto los programas cliente como los servidores son con frecuencia parte de un programa o aplicación mayores.
        El Esquema de funcionamiento de un Sistema Cliente/Servidor sería:
        El cliente solicita una información al servidor.
        El servidor recibe la petición del cliente.
        El servidor procesa dicha solicitud.
        El servidor envía el resultado obtenido al cliente.
        El cliente recibe el resultado y lo procesa.
        ";
        $nuevapost14 -> imagen = "img14";
        $nuevapost14 -> save();

        $nuevapost15 = new Post();
        $nuevapost15 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost15 -> resultado_de_aprendizaje = "Identificar las ventajas y desventajas de la arquitectura  Cliente/Servidor";
        $nuevapost15 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost15 -> informacion = "Centralización del control: los accesos, recursos y la integridad de los datos son controlados por el servidor de forma que un programa cliente defectuoso o no autorizado no pueda dañar el sistema. Esta centralización también facilita la tarea de poner al día datos u otros recursos (mejor que en las redes P2P).
        Escalabilidad: se puede aumentar la capacidad de clientes y servidores por separado. Cualquier elemento puede ser aumentado (o mejorado) en cualquier momento, o se pueden añadir nuevos nodos a la red (clientes y/o servidores).
        Fácil mantenimiento: al estar distribuidas las funciones y responsabilidades entre varios ordenadores independientes, es posible reemplazar, reparar, actualizar, o incluso trasladar un servidor, mientras que sus clientes no se verán afectados por ese cambio (o se afectarán mínimamente). Esta independencia de los cambios también se conoce como encapsulación.
        Existen tecnologías suficientemente desarrolladas, diseñadas para el paradigma de C/S que aseguran la seguridad en las transacciones, la amigabilidad de la interfaz, y la facilidad de empleo.
        En las redes C/S los demás clientes no tienen acceso a las IP's por lo que se dificulta el rastreo y/o hackeo de los usuarios
        Desventajas 
        La congestión del tráfico ha sido siempre un problema en el paradigma de C/S. Cuando una gran cantidad de clientes envía peticiones simultáneas al mismo servidor, este debe gestionarlas y por ello puede verse saturado (a mayor número de clientes, más problemas para el servidor). Al contrario, en las redes P2P como cada nodo en la red hace también de servidor, cuanto más nodos hay, mejor es el ancho de banda que se tiene.
        El paradigma de C/S clásico no tiene la robustez de una red P2P. Cuando un servidor está caído, las peticiones de los clientes no pueden ser satisfechas. En la mayor parte de redes P2P, los recursos están generalmente distribuidos en varios nodos de la red. Aunque algunos salgan o abandonen la descarga; otros pueden todavía acabar de descargar consiguiendo datos del resto de los nodos en la red.
        El software y el hardware de un servidor son generalmente muy determinantes. Un hardware regular de un ordenador personal puede no poder servir a cierta cantidad de clientes. Normalmente se necesita software y hardware específico, sobre todo en el lado del servidor, para satisfacer el trabajo. Por supuesto, esto aumentará el coste.
        El cliente no dispone de los recursos que puedan existir en el servidor. Por ejemplo, si es una aplicación web, no podremos escribir en el disco duro del cliente o imprimir directamente sobre las impresoras sin sacar antes la ventana previa de impresión de los navegadores.
        En las redes C/S la única forma de obtener la información es a través de la que proporciona el servidor, con lo cual los clientes no podrán compartir información entre ellos
        ";
        $nuevapost15 -> imagen = "img15";
        $nuevapost15 -> save();

        $nuevapost16 = new Post();
        $nuevapost16 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost16 -> resultado_de_aprendizaje = "Definir el concepto de cómputo en la nube";
        $nuevapost16 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost16 -> informacion = "La computación en nube ofrece a las empresas modelos prácticos para acceder a las ofertas de infraestructura, plataforma y software de pago por uso. Con la computación en nube, las empresas pueden liberar capital, optimizar el mantenimiento de TI, modernizar y escalar los enfoques empresariales, convertir la seguridad y la flexibilidad en servicios y soluciones, ayudar a los clientes de nuevas maneras, y hacer crecer su empresa en las condiciones de mercado siempre cambiantes.
        Nube privada
        El modelo de nube privada hace referencia a los recursos de computación en nube que se usan exclusivamente en una misma empresa u organización. La nube privada puede almacenarse en el centro de datos interno o un proveedor de servicios puede alojarla en la nube.
        Nube pública
        Cuando una organización implementa un modelo de nube pública, toda la infraestructura de hardware, software y soporte es propiedad del proveedor de servicios que la administra y la proporciona exclusivamente por Internet. Puede acceder a estos servicios y administrar la cuenta mediante un navegador web.
        Nube híbrida
        Un modelo de computación en nube híbrido combina las nubes públicas y privadas para compartir datos y aplicaciones. Las nubes híbridas conectan la infraestructura y las aplicaciones entre recursos en nube con los recursos existentes que no se encuentran en la nube. Este enfoque le aporta a su empresa más flexibilidad y más opciones de implementación.
        ";
        $nuevapost16 -> imagen = "img16";
        $nuevapost16 -> save();

        $nuevapost17 = new Post();
        $nuevapost17 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost17 -> resultado_de_aprendizaje = "Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS)";
        $nuevapost17 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost17 -> informacion = "Cuando nos referimos a IaaS, estamos hablando de infraestructuras como servicio. Las empresas contratan la infraestructura de hardware a un tercero a cambio de una cuota o alquiler. La contratación de este hardware permite elegir la capacidad de proceso (procesadores), la memoria a utilizar (memoria RAM) y el espacio de almacenamiento (disco duro).
        IaaS ofrece también servicios de virtualización como máquinas virtuales, cortafuegos, sistemas de backups o balanceadores de carga.
        IaaS es la base del servicio y contiene los bloques fundamentales para la TI en la nube, pues proporciona los servicios y estructuras necesarios sobre los cuales se construyen los otros servicios.
        Ejemplos de IaaS
        Amazon Web Services y Microsoft Azure son dos claros ejemplos de infraestructura como servicios, a continuación vemos las principales características de cada uno.
        •	Amazon Web Services: el proveedor de servicios en la nube de Amazon es un claro ejemplo de IaaS. Con su servicio central Amazon EC2, permite a los usuarios alquilar servidores virtuales en los cuales instalar sus aplicaciones. EC2 ofrece configuraciones de hardware que pueden ser contratadas por los clientes. En estas configuraciones, llamadas tipos de instancias, se puede elegir entre una variedad de CPUs, memoria RAM, almacenamiento en disco duro y capacidad de transferencia de red. Además ofrece otros servicios anexos, como contratación de cortafuegos, direcciones IPv4 estáticas y redes virtuales independientes.
        •	Microsoft Azure: Microsoft también dispone de un servicio IaaS con Azure. En él, se puede realizar una contratación de hardware personalizada en cuanto a CPU, memoria, almacenamiento y velocidad de red. En esta infraestructura los clientes pueden hacer correr sus aplicaciones empresariales, como por ejemplo SAP o Sharepoint sin necesidad de preocuparse por el hardware necesario para hacerlo. Microsoft Azure destaca por la gran cantidad de recursos que pueden ser contratados, lo que la hace ideal para las empresas con necesidades muy exigentes en cuanto a infraestructura.
        Qué es PaaS
        El servicio PaaS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de datos, middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc.
        Este tipo de servicios es el ideal para los desarrolladores que sólo quieran centrarse en la implementación y administración de sus aplicaciones. Al no tener que preocuparse por los recursos de hardware y software (sistemas operativo), mejoran su eficacia, centrándose sólo en la parte que les interesa.
        PaaS es la más complicada de entender debido a que el término plataforma puede confundirse con software. Una plataforma es un software de por sí, que permite desarrollar aplicaciones.
        Ejemplos de PaaS
        Google App Engine y Bungee Connect son dos ejemplos de plataformas como servicios y tienen las siguientes características.
        •	Google App Engine: este servicio de Google está enfocado a que el cliente pueda publicar aplicaciones web online, sin tener que preocuparse por la infraestructura donde hacerlo. Así, el cliente se enfoca solamente en la construcción y configuración de sus aplicaciones, siendo Google la encargada de aprovisionar de los recursos necesarios. Google App Engine cuenta con un nivelador de carga, que va aumentando los recursos necesarios según necesiten las aplicaciones, por lo que no es necesario preocuparse por la escalabilidad.
        •	Bungee Connect: es uno de los primeros servicios PaaS que permitieron el despliegue de aplicaciones en la nube sin preocuparse por la infraestructura. Con el servicio de Bungee Connect se obtiene un entorno adecuado para el desarrollo, testeo y ejecución de aplicaciones web.
        Qué es SaaS
        Este modelo de software como infraestructura, aloja el software de la empresa, así como sus datos, en servidores externos a la misma, y paga una cuota por su utilización. Cualquier empleado de una empresa podrá acceder desde cualquier lugara las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la nube estamos hablando de SaaS.
        Con un SaaS la preocupación de la empresa será sólo cómo utilizar los programas de software necesarios para su funcionamiento, olvidándose del resto de recursos. El hardware requerido, sistemas operativos, aplicaciones, etc. son provistas por el proveedor del servicio que, además, se encarga de mantenerlas funcionando correctamente y actualizadas.
        Todos los usuarios acceden diariamente a aplicaciones SaaS ya que se puede decir que, cualquier aplicación online que se ejecuta en la nube y que se pueda acceder a ella a través de internet, es una aplicación SaaS.
        Ejemplos de SaaS
        Servicios como Microsoft Office 365 y CMS para diseño de páginas web como WordPress, son ejemplos de software como servicio y cuentan con las siguientes funcionalidades:
        •	Microsoft Office 365: con esta plataforma de Microsoft los usuarios pueden acceder a las herramientas de ofimática de Microsoft (Word, Excel, Access, PowerPoint, etc.) desde cualquier dispositivo, que se ejecutan en servidores de Microsoft. El usuario sólo se preocupa de utilizar la aplicación sin tener nada que ver con su instalación, mantenimiento y actualización.
        •	WordPress: la instalación de WordPress en un servidor para diseñar una página web, da como resultado un sitio o página web que es accesible para los usuarios desde cualquier dispositivo, a través de internet. WordPress es un software que se está ejecutando en un servidor remoto donde el usuario interactúa con él sin tener nada que ver con la infraestructura necesaria para su funcionamiento.
        ";
        $nuevapost17 -> imagen = "img17";
        $nuevapost17 -> save();

        $nuevapost18 = new Post();
        $nuevapost18 -> unidad_de_aprendizaje = "I. Fundamentos de la arquitectura Cliente/Servidor";
        $nuevapost18 -> resultado_de_aprendizaje = "Describir la arquitectura  Cliente/Servidor  con los modelos de cómputo en la nube IAAS, PAAS, SAAS";
        $nuevapost18 -> contenido = "Componentes y características del  Cliente/Servidor";
        $nuevapost18 -> informacion = "Infraestructura como servicio (IaaS)
        En el caso de la infraestructura como servicio (IaaS), un proveedor de servicios en la nube es propietario del hardware en el que se ejecuta su pila de software y también lo administra. Esto incluye los servidores, las redes y el almacenamiento. Esta puede ser una excelente estrategia de reducción de costos si no desea comprar y mantener la infraestructura.
        Sin embargo, el equipo de TI aún tiene mucho trabajo que hacer. Según el modelo IaaS, el equipo de TI administra los sistemas operativos, las bases de datos, las aplicaciones, las funciones y todos los datos de su organización. Como resultado de ello, suelen tener más control y flexibilidad en comparación con otros modelos de servicio.
        IaaS es un autoservicio, lo que permite al equipo de TI acceder a los recursos según lo necesario a través de una API o un panel de control. Algunos ejemplos comunes de IaaS incluyen instancias en Servicios web de Amazon* (AWS), Google* Compute Engine y Microsoft* Azure, los que permiten comprar más o menos capacidad según el uso. Eso significa que se necesita de muy poco esfuerzo, lo que es una ventaja si cree que sus necesidades cambiarán en el corto plazo. Si es parte de una organización grande, también puede tener acceso a la instancia de IaaS de otro sector de su empresa.
        Plataforma como servicio (PaaS)
        El siguiente nivel de servicio es la plataforma como servicio (PaaS). PaaS es similar a IaaS, excepto que el proveedor de servicios en la nube también proporciona el sistema operativo y las bases de datos. Eso significa menos trabajo para su equipo de TI. Su organización aún sigue siendo responsable de las aplicaciones, las funciones y los datos.
        PaaS ofrece a los desarrolladores una plataforma simple y escalable para compilar aplicaciones. Al igual que con IaaS, puede adquirir más recursos según lo necesario. Ya que varios usuarios pueden acceder a la aplicación de desarrollo al mismo tiempo, PaaS puede optimizar los flujos de trabajo y mejorar la coordinación. Algunos ejemplos de servicios PaaS son AWS* Elastic Beanstalk y Google* App Engine.
        Software como servicio (SaaS)
        Por último, el software como servicio (SaaS) ofrece la mayor compatibilidad y es el más simple de todos los modelos de entrega para el usuario final. Es probable que ya lo esté utilizando en su organización.
        SaaS se puede ejecutar en una arquitectura de multitenencia en la que una instancia de software presta servicios a varios usuarios. Por lo común, los productos SaaS no implican una descarga o una instalación, así los usuarios finales no deben administrar las actualizaciones de software. Solo son responsables de sus datos. Entre los ejemplos populares de SaaS se incluyen el software CRM, el almacenamiento de archivos en la nube y el correo electrónico.
        ";
        $nuevapost18 -> imagen = "img18";
        $nuevapost18 -> save();

        // UNIDAD 2

        $nuevapost19 = new Post();
        $nuevapost19 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost19 -> resultado_de_aprendizaje = "Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas";
        $nuevapost19 -> contenido = "Estrategias de reparto de complejidad";
        $nuevapost19 -> informacion = "Una base de datos distribuida (BDD) es un conjunto de múltiples bases de datos lógicamente relacionadas las cuales se encuentran distribuidas en diferentes espacios lógicos y geográficos (pej. un servidor corriendo 2 máquinas virtuales) e interconectados por una red de comunicaciones. Dichas BDD tienen la capacidad de realizar procesamientos autónomos, estos permiten realizar operaciones locales o distribuidas.
        Un Sistema de Bases de Datos Distribuida (SBDD), en inglés Distributed Database Management System (DDBMS),1 es un sistema en el cual múltiples sitios de bases de datos están ligados entre sí por un sistema de comunicaciones de tal forma que, un usuario en cualquier sitio puede acceder los datos en cualquier parte de la red exactamente como si estos fueran accedidos de forma local.
        Un sistema distribuido de bases de datos se almacena en varias computadoras. Los principales factores que distinguen un SBDD de un sistema centralizado son los siguientes:
        •	Hay múltiples computadores, llamados sitios o nodos.
        •	BEstos nodos deben de estar comunicados por medio de algún tipo de red de comunicaciones para transmitir datos y órdenes entre los sitios.
        ";
        $nuevapost19 -> imagen = "img19";
        $nuevapost19 -> save();

        $nuevapost20 = new Post();
        $nuevapost20 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost20 -> resultado_de_aprendizaje = "Definir los conceptos de lógica de acceso, presentación y negocio a datos";
        $nuevapost20 -> contenido = "Estrategias de reparto de complejidad";
        $nuevapost20 -> informacion = "El término lógica de negocio hace referencia a la parte de un sistema que se encarga de codificar las reglas de negocio del mundo real que determinan cómo la información puede ser creada, almacenada y cambiada. En el ámbito de la programación, es una de las capas del modelo MVC Modelo Vista-Controlador separando así la complejidad del desarrollo en capas independientes.
        La lógica de negocio son rutinas que realiza entrada de datos, consultas, generación de informes. Esta capa esta presente, específicamente, wn todo el procesamiento que se realiza detrás del Backend, la aplicación visible para el usuario.
        En el contexto de la orientación a objetos, la lógica del negocio se toma como aquella funcionalidad ofrecida por el software. El software se comunica de manera amigable con el usuario a partir de la interfaz. En cambio, el procesamiento de los datos capturados como entrada y la posterior entrega de los resultados al usuario por medio de la interfaz, es conocido como la Lógica de Negocio.
        ";
        $nuevapost20 -> imagen = "img20";
        $nuevapost20 -> save();

        $nuevapost21 = new Post();
        $nuevapost21 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost21 -> resultado_de_aprendizaje = "Explicar el proceso de diseño de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación";
        $nuevapost21 -> contenido = "Estrategias de reparto de complejidad";
        $nuevapost21 -> informacion = "-    Presentación. (Conocida como capa web en aplicaciones web o como capa de usuario en aplicaciones nativas)
        -	Lógica de negocio. (Conocida como capa aplicativa)
        -	Datos. (Conocida como capa de base de datos)
        En cambio, el término «nivel» corresponde a la forma en que las capas lógicas se encuentran distribuidas de forma física. Por ejemplo:
        Una solución de tres capas (presentación, lógica del negocio, datos) que residen en un solo ordenador (Presentación+lógica+datos). Se dice que la arquitectura de la solución es de tres capas y un nivel.
        Una solución de tres capas (presentación, lógica del negocio, datos) que residen en dos ordenadores (Presentación+lógica por un lado; lógica+datos por el otro lado). Se dice que la arquitectura de la solución es de tres capas y dos niveles.
        ";
        $nuevapost21 -> imagen = "img21";
        $nuevapost21 -> save();

        $nuevapost22 = new Post();
        $nuevapost22 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost22 -> resultado_de_aprendizaje = "Explicar el proceso de desarrollo de logica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación";
        $nuevapost22 -> contenido = "Estrategias de reparto de complejidad";
        $nuevapost22 -> informacion = "i";
        $nuevapost22 -> imagen = "img22";
        $nuevapost22 -> save();

        $nuevapost23 = new Post();
        $nuevapost23 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost23 -> resultado_de_aprendizaje = "Definir el concepto de nivel vinculado a programación web";
        $nuevapost23 -> contenido = "Modelos Multinivel";
        $nuevapost23 -> informacion = "-Desarrollo web significa construir y mantener sitios web; es el trabajo que tiene lugar en un segundo plano y que permite que una web tenga una apariencia impecable, un funcionamiento rápido y un buen desempeño para permitir la mejor experiencia de usuario. Los desarrolladores web son como duendes con poderes: nunca los ves, pero son los que hacen que todo esté bien y funcione de manera rápida y eficiente.
        Los conocimientos y habilidades vinculados al desarrollo web son los más demandados y también los mejor pagados. Se trata de una carrera con muchas posibilidades y salidas. Aquí puedes informarte mejor de cómo convertirte en desarrollador·a web y conseguir un título oficial a través del Programa en Desarrollo web – Frontend de OpenClassrooms.  
        Pero, ¿cómo lograrlo?
        Los desarrolladores web lo hacen a través de diversos lenguajes de programación. El lenguaje que usan en cada momento depende del tipo de tarea que están haciendo. El desarrollo web se divide, de forma general, en Frontend (la parte cliente) y Backend (la parte servidor).
        Frontend, Backend o Full-stack, ¿quién es quién?
        Un desarrollador Frontend se encarga de la composición, diseño e interactividad usando HTML, CSS y JavaScript. El desarrollador Frontend toma una idea y la convierte en realidad. Lo que ves y lo que usas, como por ejemplo el aspecto visual del sitio web, los menús desplegables y el texto, son creados por el desarrollador Frontend, que escribe una serie de programas para dar estructura, forma e interactividad a estos elementos. Estos programas se ejecutan después a través de un navegador.
        El desarrollador Backend se encarga de lo que no se ve, es decir, dónde se almacenan los datos. Sin datos no hay Frontend. El Backend consiste en el servidor que acoge la web, una aplicación para ejecutarlo y una base de datos. El desarrollador Backend utiliza programas de computación para asegurar que el servidor, la aplicación y la base de datos tengan un desempeño regular conjunto. Además, analiza qué necesita la empresa y proporciona soluciones de programación eficientes. Para hacer este increíble trabajo, utiliza una serie de lenguajes del lado del servidor, como PHP, Ruby, Python y Java
        ";
        $nuevapost23 -> imagen = "img23";
        $nuevapost23 -> save();

        $nuevapost24 = new Post();
        $nuevapost24 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost24 -> resultado_de_aprendizaje = "Explicar el proceso de planificación en dos niveles";
        $nuevapost24 -> contenido = "Modelos Multinivel";
        $nuevapost24 -> informacion = "Planificación de dos niveles
        Hasta ahora hemos supuesto que todos los procesos están en memoria principal. Si la memoria principal disponible no es suficiente, algunos de los procesos principales tendrán que mantenerse en el disco total o parcialmente. Esta situación tiene implicaciones importantes para la planificación , ya que el tiempo de conmutación de procesos cuando hay que traer los procesos del disco es varios órdenes de magnitud mayor que cuando la conmutación es a un proceso que ya esta en memoria.
        Una forma mas practica de manejar los procesos intercambiados a disco es el unos de un planificador de dos niveles . Primero se carga en memoria un subconjunto de los procesos ejecutables , luego , el planificador se limita a escoger procesos de este subconjunto durante cierto tiempo. Una vez efectuado el cambio , el planificador de bajo nivel otra vez se limita a ejecutar procesos que están en la memoria en ese momento , mientras el planificador de nivel superior se ocupa de trasladar procesos entre la memoria y el disco.
       ";
        $nuevapost24 -> imagen = "img24";
        $nuevapost24 -> save();

        $nuevapost25 = new Post();
        $nuevapost25 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost25 -> resultado_de_aprendizaje = "Explicar el proceso de planificación en tres niveles";
        $nuevapost25 -> contenido = "Modelos Multinivel";
        $nuevapost25 -> informacion = "El planeamiento es el concepto general que nos permite ver el análisis descriptivo  de desarrollar una mejor situación futura, es decir el proceso de establecer o visualizar un futuro deseado; a su vez el planeamiento tienen tres niveles de desenvolvimiento, el primero es la planeación que está ligado a la capacidad de pensar o diseñar la viabilidad del futuro deseado, es decir trazar un objetivo; pero para que este objetivo pueda desarrollarse se tiene que realizar una planificación estratégica  la cual establece metas, indicadores, estratégicas y acciones estratégicas; por otro lado lo planificado tiene que ejecutarse en un corto plazo y debe estar proyectado en una programación.
        Existen cuatro palabras claves cuando hablamos de Planificación estratégica: Planeamiento,  planeación, planificación y programación. Es decir a partir del planeamiento se realiza la planeación, posterior a ello se realiza la planificación y final realizas la programación.
        La planificación tiene 3 niveles el primero es el nivel estratégico, el segundo es el nivel programático y el tercero el nivel operativo.
        El nivel de Planificación Estratégica
        Facilita la construcción de la Visión, la  Misión institucional y la elaboración de objetivos estratégicos. Exige a la organización precisa lo que quiere “Ser y Hacer” en el largo plazo.
        El nivel de Planificación Programática
        Establece y/o formula las estrategias y tácticas las cuales nos permitirán alcanzar los objetivos estratégicos. Es necesario destacar que el nivel programático se convierte en el puente que articula el nivel estratégico con el nivel operativo.
        El nivel de Planificación Operativa
        Establece con claridad las actividades  y metas que se deben alcanzar en el corto plazo para garantizar el logro de los objetivos.
        ";
        $nuevapost25 -> imagen = "img25";
        $nuevapost25 -> save();

        $nuevapost26 = new Post();
        $nuevapost26 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost26 -> resultado_de_aprendizaje = "Explicar el proceso de planificación multiniveles";
        $nuevapost26 -> contenido = "Modelos Multinivel";
        $nuevapost26 -> informacion = "-La planificación mediante colas multinivel es un algoritmo de planificación de procesos en un sistema operativo. Su objetivo es diferenciar entre distintos tipos de trabajos, para ello dividen la cola de procesos preparados en varias colas, una por cada tipo de trabajo, y no permiten el movimiento de los procesos entre las distintas colas.
        Los algoritmos de colas multinivel realimentadas se basan en los algoritmos de colas multinivel, pero permiten el movimiento de los trabajos de unas colas a otras.
        Las siglas MLQ y MLFQ son los acrónimos ingleses de multi level queues (colas multinivel) y multi level feedback queues (colas multinivel realimentadas).
        Este algoritmo de planificación clasifica los procesos en diferentes grupos, de forma que podemos asignarlos a diferentes colas con distinta planificación para gestionarlos de la manera que realmente necesitan.
        Los procesos se asignan permanentemente a una cola del sistema, generalmente en función de alguna propiedad del proceso, por ejemplo el tamaño de memoria, la prioridad del proceso o el tipo de proceso. 
        Por ejemplo, tenemos el grupo de procesos foreground (interactivos) y background (batch), que necesitan diferentes tiempos de respuesta.  Cada uno de ellos estará gestionado en una cola distinta con un algoritmo de planificación distinto, por ejemplo la cola de procesos foreground con Round Robin, y la de procesos background con FCFS.
        Además debe existir un criterio de planificación entre las colas. Puede ser de prioridad fija con requisa o sin requisa, o de prioridad variable con requisa o sin requisa.
        En los algoritmos FCFS, SJF y aquellos que utilizan prioridades, un proceso puede permanecer en el procesador hasta que realice una entrada/salida o hasta que termine. Si no termina o no realiza ninguna entrada/salida, el proceso podría llegar a monopolizar la CPU. Para evitar este monopolio, el mecanismo de requisa permite que un proceso pueda ser expulsado del procesador.
        El criterio de planificación suele implementarse como prioridad fija con eexpropiación que consiste en que no se puede ejecutar un proceso si hay algún otro en una cola más prioritaria. Y si un proceso se está ejecutando y llega otro proceso más prioritario que él, abandonará el procesador y se lo cederá al proceso con mayor prioridad.
        Las características de esta política de planificación son:
        Es apropiativa, es decir si llega un proceso con mayor prioridad que el que se está ejecutando podrá expulsarle y apropiarse del procesador.
        Cada cola tendrá una prioridad interna, de acuerdo a su algoritmo de planificación. Y cuando un proceso entre en la cola, automáticamente se calculará su prioridad interna. Esto no afectará al funcionamiento global de las colas múltiples.
        El proceso que se ejecutará será el de mayor prioridad. Y si hubiera varios, se elegirá el mayor según las normas de las políticas de gestión correspondientes.
        Si aplicamos la planificación apropiativa de prioridad fija al ejemplo anterior, la cola de procesos foreground será más prioritaria que la de procesos background. Mientras haya procesos en la cola de foreground, los de la cola de background no se podrán ejecutar.
        Otra posibilidad sería realizar la expulsión con intervalos periódicos o quantum, repartiendo el tiempo entre las cola
        En resumen, este algoritmo se puede definir por los siguientes parámetros:
        El número de colas.
        El algoritmo de planificación de cada cola.
        El algoritmo de planificación entre las distintas colas.
        El método usado para determinar en qué cola se introducirá un proceso cuando haya que darle servicio.
        ";
        $nuevapost26 -> imagen = "img26";
        $nuevapost26 -> save();

        $nuevapost27 = new Post();
        $nuevapost27 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost27 -> resultado_de_aprendizaje = "Identificar problemas de actualización y mantenimiento de aplicaciones multinivel";
        $nuevapost27 -> contenido = "Modelos Multinivel";
        $nuevapost27 -> informacion = "-	Al hablar del desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes.
        Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos.
        La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación.
        La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML.
        Convertir un sistema de tres niveles a otro multinivel es fácil ya que consiste en extender la capa intermedia permitiendo que convivan múltiples aplicaciones en lugar de una sola
        ";
        $nuevapost27 -> imagen = "img27";
        $nuevapost27 -> save();

        $nuevapost28 = new Post();
        $nuevapost28 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost28 -> resultado_de_aprendizaje = "Reconocer los conceptos de modelo, control y vista, en las arquitecturas Cliente/Servidor";
        $nuevapost28 -> contenido = "Modelo Vista Controlador";
        $nuevapost28 -> informacion = "En la arquitectura C/S el remitente de una solicitud es conocido como cliente. Sus características son:
        Es quien inicia solicitudes o peticiones, tiene por tanto un papel activo en la comunicación (dispositivo maestro o amo).
        Espera y recibe las respuestas del servidor.
        Por lo general, puede conectarse a varios servidores a la vez.
        Normalmente interactúa directamente con los usuarios finales mediante una interfaz gráfica de usuario.
        Al receptor de la solicitud enviada por el cliente se le conoce como servidor. Sus características son:
        Al iniciarse espera a que lleguen las solicitudes de los clientes, desempeña entonces un papel pasivo en la comunicación (dispositivo esclavo).
        Tras la recepción de una solicitud, la procesa y luego envía la respuesta al cliente.
        Por lo general, acepta las conexiones de un gran número de clientes (en ciertos casos el número máximo de peticiones puede estar limitado).
        En la arquitectura C/S las características generales son:    
        El Cliente y el Servidor pueden actuar como una sola entidad y también pueden actuar como entidades separadas, realizando actividades o tareas independientes.
        Las funciones de Cliente y Servidor pueden estar en plataformas separadas, o en la misma plataforma.
        Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los Clientes o de los Servidores, ya sean por actualización o por reemplazo tecnológico, se realizan de una manera transparente para el usuario final.
        La interrelación entre el hardware y el software está basada en una infraestructura poderosa, de tal forma que el acceso a los recursos de la red no muestra la complejidad de los diferentes tipos de formatos de datos y de los protocolos.
        Su representación típica es un centro de trabajo (PC), en donde el usuario dispone de sus propias aplicaciones de oficina y sus propias bases de datos, sin dependencia directa del sistema central de información de la organización.
        Los servidores pueden ser apátridas o stateful. Un servidor apátrida no guarda ninguna información entre las peticiones. Un servidor stateful puede recordar la información entre las peticiones. El alcance de esta información puede ser global o sesión-específico. Un servidor de HTTP para las páginas estáticas HTML es un ejemplo de un servidor apátrida, mientras que Apache Tomcat es un ejemplo de servidor stateful.   
        La interacción entre el cliente y el servidor se describe a menudo usando diagramas de secuencia. Los diagramas de secuencia se estandarizan en el UML. Es importante que los clientes no interactúen entre sí ni que lo hagan clientes de capas bajas hacia otros de capas más altas, por eso todo tiene que pasar por el servidor.    
        Otro tipo de arquitectura de red se conoce como arquitectura de par-a-par porque cada nodo o caso del programa es un “cliente” y un “servidor” y cada uno tiene responsabilidades equivalentes. Ambas arquitecturas están en uso amplio.
        ";
        $nuevapost28 -> imagen = "img28";
        $nuevapost28 -> save();

        $nuevapost29 = new Post();
        $nuevapost29 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost29 -> resultado_de_aprendizaje = "Reconocer el concepto del Modelo Vista Controlador (MVC) en las arquitecturas  Cliente/Servidor";
        $nuevapost29 -> contenido = "Modelo Vista Controlador";
        $nuevapost29 -> informacion = "Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.
        Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo.
        El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.
        La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.
        El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno. 
        El modelo es el responsable de:
        Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.
        Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: “Si la mercancía pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor”.
        Lleva un registro de las vistas y controladores del sistema.
        Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un agente externo (por ejemplo, un fichero por lotes  que actualiza los datos, un temporizador que desencadena una inserción, etc.). 
        El controlador es responsable de:
        Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
        Contiene reglas de gestión de eventos, del tipo “SI Evento Z, entonces Acción W”. Estas acciones pueden suponer peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al método “Actualizar()”. Una petición al modelo puede ser “Obtener_tiempo_de_entrega ( nueva_orden_de_venta )”.  
        Las vistas son responsables de:
        Recibir datos del modelo y los muestra al usuario.
        Tienen un registro de su controlador asociado (normalmente porque además lo instancia).
        Pueden dar el servicio de “Actualización()”, para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes).
        ";
        $nuevapost29 -> imagen = "img29";
        $nuevapost29 -> save();

        $nuevapost30 = new Post();
        $nuevapost30 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost30 -> resultado_de_aprendizaje = "Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas  Cliente/Servidor";
        $nuevapost30 -> contenido = "Modelo Vista Controlador";
        $nuevapost30 -> informacion = "-	MVC era inicialmente un patrón arquitectural, un modelo o guía que expresa cómo organizar y estructurar los componentes de un sistema software, sus responsabilidades y las relaciones existentes entre cada uno de ellos.
        Su nombre, MVC, parte de las iniciales de Modelo-Vista-Controlador (Model-View-Controller, en inglés), que son las capas o grupos de componentes en los que organizaremos nuestras aplicaciones bajo este paradigma.
        Es a menudo considerado también un patrón de diseño de la capa de presentación, pues define la forma en que se organizan los componentes de presentación en sistemas distribuidos.
        ";
        $nuevapost30 -> imagen = "img30";
        $nuevapost30 -> save();

        $nuevapost31 = new Post();
        $nuevapost31 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost31 -> resultado_de_aprendizaje = "Describir el desarrollo de software a partir del MVC, en las arquitecturas Cliente/Servidor";
        $nuevapost31 -> contenido = "Modelo Vista Controlador";
        $nuevapost31 -> informacion = "-	Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.
        Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo.
        El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.
        La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.
        El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.
        El modelo es el responsable de:
        Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.
        Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: “
        Si la mercancía pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor.
        Lleva un registro de las vistas y controladores del sistema.
        Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un agente externo (por ejemplo, un fichero por lotes  que actualiza los datos, un temporizador que desencadena una inserción, etc.).
        El controlador es responsable de:
         Recibe los eventos de entrada (un clic, un cambio en un campo de texto, etc.).
        Contiene reglas de gestión de eventos, del tipo “SI Evento Z, entonces Acción W”. Estas acciones pueden suponer peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al método “Actualizar()”. Una petición al modelo puede ser “Obtener_tiempo_de_entrega ( nueva_orden_de_venta )”. 
        Las vistas son responsables de:
        Recibir datos del modelo y los muestra al usuario.
        Tienen un registro de su controlador asociado (normalmente porque además lo instancia).
        Pueden dar el servicio de “Actualización()”, para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes).
        El flujo que sigue el control generalmente es el siguiente:
         Flujo MVC
        El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace, etc.)
        El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback.
        El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.
        El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, produce un listado del contenido del carro de la compra). El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podría utilizar el patrón Observador para proveer cierta indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio (el modelo) a la vista aunque puede dar la orden a la vista para que se actualice. Nota: En algunas implementaciones la vista no tiene acceso directo al modelo, dejando que el controlador envíe los datos del modelo a la vista.
        La interfaz de usuario espera nuevas interacciones del usuario, comenzando el ciclo nuevamente.
        ";
        $nuevapost31 -> imagen = "img31";
        $nuevapost31 -> save();

        $nuevapost32 = new Post();
        $nuevapost32 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost32 -> resultado_de_aprendizaje = "Definir el concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API)";
        $nuevapost32 -> contenido = "Sockets";
        $nuevapost32 -> informacion = "Al igual que una interfaz de usuario permite la comunicación entre los humanos y las máquinas, una API permite la comunicación entre diferentes aplicaciones de software. Las interfaces de programación de aplicaciones permiten transferir los datos de forma ordenada. De esta forma se pueden transferir datos incluso con aplicaciones escritas en diferentes lenguajes de programación.";
        $nuevapost32 -> imagen = "img32";
        $nuevapost32 -> save();

        $nuevapost33 = new Post();
        $nuevapost33 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost33 -> resultado_de_aprendizaje = "Explicar el proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API)";
        $nuevapost33 -> contenido = "Sockets";
        $nuevapost33 -> informacion = "Una interfaz de programación de aplicaciones (API) es un código que permite que dos programas de software se comuniquen entre sí.
        La API define la forma correcta para que un desarrollador escriba un programa que solicite servicios de un sistema operativo (SO) u otra aplicación. Las API se implementan mediante llamadas a funciones compuestas de verbos y sustantivos. La sintaxis requerida se describe en la documentación de la aplicación a la que se llama
        ";
        $nuevapost33 -> imagen = "img33";
        $nuevapost33 -> save();

        $nuevapost34 = new Post();
        $nuevapost34 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost34 -> resultado_de_aprendizaje = "Definir el concepto de sockets";
        $nuevapost34 -> contenido = "Sockets";
        $nuevapost34 -> informacion = "Socket designa un concepto abstracto por el cual dos procesos (posiblemente situados en computadoras distintas) pueden intercambiar cualquier flujo de datos, generalmente de manera fiable y ordenada. Además es una estructura de datos que permite que dos máquinas se comuniquen entre ellas.
        El término socket es también usado como el nombre de una interfaz de programación de aplicaciones (API) para la familia de protocolos de Internet TCP/IP, provista usualmente por el sistema operativo.
        Los sockets de Internet constituyen el mecanismo para la entrega de paquetes de datos provenientes de la tarjeta de red a los procesos o hilos apropiados. Un socket queda definido por un par de direcciones IP local y remota, un protocolo de transporte y un par de números de puerto local y remoto.
        ";
        $nuevapost34 -> imagen = "img34";
        $nuevapost34 -> save();

        $nuevapost35 = new Post();
        $nuevapost35 -> unidad_de_aprendizaje = "II. Modelo Cliente/Servidor";
        $nuevapost35 -> resultado_de_aprendizaje = "Explicar el proceso del uso de sockets en aplicaciones Cliente/Servidor";
        $nuevapost35 -> contenido = "Sockets";
        $nuevapost35 -> informacion = "El proceso servidor crea un socket con nombre y espera la conexión. El proceso cliente crea un socket sin nombre. El proceso cliente realiza una petición de conexión al socket servidor. El cliente realiza la conexión a través de su socket mientras el proceso servidor mantiene el socket servidor original con nombre.";
        $nuevapost35 -> imagen = "img35";
        $nuevapost35 -> save();
   }    
}