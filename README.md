# cta-admin-couchbase
Administración de BBDD NoSQL con Couchbase - CTA Zaragoza

ADMINISTRACIÓN DE BASES DE DATOS NOSQL CON COUCHBASE
===================

**Centro de Tecnologías Avanzadas de Zaragoza**
**Del 24 al 17 de Noviembre 2016**
**De 17:00 a 21:17**
**Agustín Calderón**
**[agustincl@gmail.com][1]**

---

> **Nota:**

> - El día 31 no hay clase.
> - Hay que añadir **"URGENTE"** en los correos a Agustín para que nos de prioridad.

----------


Día 1
-------------

Se habló sobre como el **Big Data** cubre necesidades de **velocidad, variedad y volumen**, debido a la inminente cantidad de datos que circulan por la red, con formatos indeterminados.

Así mismo, trabaja la parte **operacional** de los datos, ofreciendo soluciones a **tiempo real**.

> **Páginas visitadas:**

> - [Shodan][2]
> - [Twitter Pings][3]

#### <i class="icon-cog"></i> Instalación de Couchbase en CentOS

 - Es importante desactivar swap y hugepage porque escriben en disco y
   no queremos eso ya que buscamos velocidad.
 -  La administración de Couchbase se puede hacer mediante API, Interface
   web y CLI.

**Como desactivar Swap y Hugpages**

    $ echo 0 > /proc/sys/vm/swappiness -> desactiva swap

    $ echo “” >>/etc/sysctl.conf  -> vacio sysctl para que no reestablezca ram al reiniciar

    $ echo ‘vm.swappinnes = 0’ >> /etc/sysctl.conf -> desactiva swap

    $ echo never > /sys/kernel/mm/transarent_hugepage/enabled -> desactiva hugepage

    $ echo never > /sys/kernel/mm/transarent_hugepage/defrag -> desactiva hugepage
    

#### <i class="icon-cog"></i> Comandos CentOS utilizados

    $ip a -> Muestra la configuración de red. Equivalente a ipconfig o ifconfig
    $nmtui -> Lanza la herramienta de configación de red
