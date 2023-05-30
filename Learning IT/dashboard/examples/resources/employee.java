import java.util.Scanner;
public class employee
{	static Scanner sc=new Scanner(System.in);
static int empid;
static String name;
static float salary;

public static void insert ()
{	
System.out.println("enter empid");
empid=sc.nextInt();
System.out.println("enter name");
name=sc.next();
System.out.println("enter salary");
salary=sc.nextFloat();
}

public static void display()
{
System.out.println(empid);
System.out.println(name);
System.out.println(salary);

}
}

class testemployee {

public static void main(String [ ]arg)
{
employee emp1=new employee();
employee emp2=new employee();
employee emp3=new employee();

emp1.insert();
emp1.display();

}
}