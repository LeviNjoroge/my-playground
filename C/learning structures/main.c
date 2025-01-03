 #include <stdio.h>

 int main(){

     typedef struct{
        int id;
        char name[20];
        int form;
        char sport[10];

     }student;

     student s1;
     printf("Enter name: \n");
     scanf("%s",&s1.name);
     printf("Enter adm no.: \n");
     scanf("%d",&s1.id);
     printf("Enter class: \n");
     scanf("%d",&s1.form);
     printf("Enter sport: \n");
     scanf("%s",&s1.sport);

     //student s1={7901,"Morgan",3,"Football"};

     printf("Admission number %d, %s,is in form %d playing %s\n",s1.id,s1.name,s1.form,s1.sport);

     return 0;
 }
