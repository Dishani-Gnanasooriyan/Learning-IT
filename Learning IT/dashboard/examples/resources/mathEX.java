package mathpack;
public class mathEX
{
public static void main (String []arug)
{
}
public static void sin(double Perpendicular,double Hypotenus,double Adjacenuse)
{
double sin1;
sin1=Perpendicular/Hypotenus;
System.out.println("\t sinQ=Perpendicular/Hypotenuse");
System.out.println();
System.out.println("\t Your sin Number is : "+sin1);
System.out.println();
System.out.println();
}

public static void cos(double Perpendicular,double Hypotenus,double Adjacenuse)
{
double cos1;
cos1=Adjacenuse/Hypotenus;
System.out.println("\t cosQ= Adjacenuse /Hypotenuse");
System.out.println();

System.out.println("\t Your cos Number is : "+cos1);
System.out.println();
System.out.println();
}


public static void tan(double Perpendicular,double Hypotenus,double Adjacenuse)
{
double tan1;
tan1=Adjacenuse/Perpendicular;
System.out.println("\t tanQ= Adjacenuse/Perpendicular");
System.out.println();

System.out.println("\t Your tan Number is : "+tan1);
System.out.println();
System.out.println();
}

public static void squ(int x)
{
double y;

y=x*x;
System.out.println("\t Your"+x+"th Square Number is : "+y);
System.out.println();
}
public static void tri(int x)
{
double y;

y=(x*(x+1))/2;
System.out.println("\t Your "+x+"th triangle Number is : "+y);
System.out.println();
}

}