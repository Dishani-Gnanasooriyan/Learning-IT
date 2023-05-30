import java.util.Scanner;
public class arraymax
{
public static void main(String [] arg){
	Scanner sc=new Scanner(System.in);
	System.out.println("how many datas you enter");
	int x=sc.nextInt();
	int nums[]= new int[x];

	for(int z=0;z<nums.length;z++){
		
		nums[z]=sc.nextInt();
		
	}
	
	int largest=nums[0];
	int smallest=nums[0];
	
	
	
	for(int y=0;y<nums.length;y++){
		
			if(nums[y]>largest) {largest=nums[y];}
			if(nums[y]<smallest) {smallest=nums[y];}
			 
			 }
	
		
			
			
			 
			 
			
		
		System.out.println("big number is"+largest);
		System.out.println("small number is"+smallest);
		
	}
	
	}