#include<stdio.h>

int main(){
    float swap,a,b,c,s[3];
    int i,j;
    printf("\n Masukan Nilai A, B dan C : \n");
    printf("\n\n");
    scanf("%f %f %f",&s[0],&s[1],&s[2]);

    for (i = 0 ; i < 2; i++)
        for (j = 0 ; j < 3 - i - 1; j++){
            if (s[j] > s[j+1]){
                swap   = s[j];
                s[j]   = s[j+1];
                s[j+1] = swap;
            }
        }

    a=s[0]; b=s[1];c=s[2];
    //for (i=0; i<3; i++) printf("%.2f ",s[i]);

    if ((a<=0)||(b<=0)||(c<=0)||(c>a+b)){
        printf("\n");
        printf("\n Segitiga Tidak Dapat Dibangun \n");
    }else if (((a==b)&&(a!=c))||((a==c)&&(a!=b))||((b==c)&&(a!=c))){
        printf("\n Segitiga Yang Dibangun Adalah Segitiga Sama Kaki \n");
    }else if ((a==b)&&(b==c)){
        printf("\n Segitiga Yang Dibangun Adalah Segitiga Sama Sisi \n");
    }else if ((c*c)==(b*b)+(a*a)){
        printf("\n Segitiga Yang Dibangun Adalah Segitiga Siku-Siku \n");
    }else {
        printf("\n Segitiga Yang Dibangun Adalah Segitiga Sama Sembarang atau Bebas \n");
    }
}
