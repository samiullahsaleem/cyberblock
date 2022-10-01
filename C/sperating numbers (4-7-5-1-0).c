

#include<stdio.h>

void speration_fun(int num);
    

int main(){
    
    
int num;

printf("ENter the number");
scanf("%d",&num);

speration_fun(num);
    
}


void speration_fun(int num){
    
    int rem=0;
    
    int num1=num;
    
    
    int count=0;
    
    int power=0;
    
    for(int i=0;num1!=0;i++){
        
        num1=num1/10;
        
        count=count+1;

    }
    
    int total_count=count;
    
    for(int j=0;j<total_count;j++){
        
        
        
        power = pow(10,(count-1));
        
       rem = num / power;
        
        
        int x = rem;
        
        x = x % 10;
        
        count--;
        
        if(j==total_count-1){
        
            printf("%d",x);
            
        }
        
        else{
            
            printf("%d-",x);
            
        }
    
    
    }
}