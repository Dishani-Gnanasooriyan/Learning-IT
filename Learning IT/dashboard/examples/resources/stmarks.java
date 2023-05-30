import java.util.Scanner;
public class stmarks
{
public static void main(String [] arg)
{
	Scanner scan=new Scanner(System.in);
	float m1,m2,m3,total,average;
	String result;
	System.out.print("\n enter the first  mark   ");
	m1=scan.nextFloat();
	System.out.print("\n enter the second  mark   ");
	m2=scan.nextFloat();
	System.out.print("\n enter the third  mark   ");
	m3=scan.nextFloat();
	total=m1+m2+m3;
	average=total/3;

	if (average>=0 && average<=40 ){	result="W";}
	
	else if (average>40 && average<=55 ){	result="S";}
	else if (average>55 && average<=65 ){	result="C";}
	else if (average>65 && average<=75 ){	result="B";}
	else if (average>75 && average<=100 ){	result="A";}
	else {result="\n Error ";}
	System.out.println( "\nResult is	"+"---- "+result+" ----");
	System.out.println( "\nTotal is		"+ total);
	System.out.println( "\nAverage is	"+ average);
	
}
} 