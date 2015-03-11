# Main objectives:
- Introduce the OOPHP syntax
- Discuss major class relationships
- With a hands on exercise with a demo!


### Class relations
1. Inheritance
2. Composition
3. Aggregation
4. Association

Among these relations, we are going to study Composition, Aggregation, and Inheritance in this class, using PHP as an object oriented language. 

**Composition**:
Class A comprises class B, B is not externally visible or does not have meaning outside of this composition. For example:
``` php <? 
class Rectangle 
{
    ...
    public function __construct($x1, $y1, $x2, $y2)
    {
        $this->p1 = new Point($x1, $y1);
        $this->p2 = new point($x2, $y2);
    }
    ...
}?>
'''

**Aggregation**:
Class A includes class B, B is externally identifiable and may exists on its own merits. For example:

``` php <?
class Rectangle
{
    ...
    public function Rectangle(&$p1, &$p2)
    {
        $this->p1 = (object)$p1;
        $this->p2 = (object)$p2;
    }
    ...
}?>
'''

**Association**:
A knows of B, B has meaning in its own right. We use it all the time.

### Coming up ...
next, Using TDD and composer in PHP with example

then, Using composer and php-activerecord to model database

rest, You should figure it out