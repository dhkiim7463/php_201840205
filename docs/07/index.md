# 수업 2019.10.23
수업내용 정리 

##  Database 연동 및 실행 수업

<Database 연동을 위한 선 작업>

## 1. PhP.ini 파일

![캡처1](./images/1.PNG)

## 2.php.ini 파일의 주석 활용

![캡처2주석뻬고다시서버시작하면활성화됨](./images/2.PNG)

## 3. 코드 1 

![캡처3접속이안돼요](./images/3.PNG)

## 4. DB 연동 성공

 ![캡처4db연동하기](./images/4.PNG)

 ## 4 -1 보강 

 ![캡처4보강](./images/5.PNG)

 ## 5. include로 연동하기

![캡처5include하기](./images/6.PNG)
 
    dbconf.php 파일을 새로 만든 뒤 host,user, passwd, database 선언 후 index.php 파일에 connect로 연결해 사용한다.  

## 6. connect_error 활용 

![캡처7connect_errno활용](./images/7.PNG)
    객체의 내부에 들어 가는 것  -> 표시가 , connect_error는 에러의 여부 확인

## 7.  성공과 실패 

![캡처8성공과실패](./images/8.PNG)

        성공 : connect_errno = 0
        실패 : connect_errno = 1 같이 값을 넣어 주는 형태이다.
         
## 8. 테이블 만들기

![캡처9vs안에테이블만들기](./images/9.PNG)
    테이블을 만들어 보기

## 9.  클래스 생성

![캡처10클래스생성할때](./images/10.PNG)
    require로 불러오기

## 10. 복합 객체 사용 

![캡처12복합객체사용](./images/11.PNG)
    복합 객체 생성 및 사용 

## 11. 테이블 갯수

![캡처13테이블갯수](./images/12.PNG)
 .$count 사용 해서 테이블의 갯수 확인 

 ## 12.  코드 2

 ![캡처14쿼리생성과테이블의유무](./images/13.PNG)
 쿼리 생성과 테이블의 유뮤 확인 코드

 ## 13. 파일명 구분 

![캡처15파일명구분](./images/14.PNG)
    윈도우 운영 체제는 파일명의 대소문자 구분이 없음 그러나 리눅스 운영체제의 경우 파일명의 대소문자 구분이 필요하다.

## 14. 테이블 클래스 생성 

![캡처16테이블클래스생성](./images/15.PNG)
복합 객체를 이용한 테이블 클래스 생성 

## 15. getter, setter 사용 

![캡처17gettersetter사용](./images/16.PNG)
간단하게 한 것... 이러한 방법도 있다.

## 16. 성공 

![캡처18성공](./images/19.PNG)
테이블에 관한 내용 추가하면 해당 실행 결과가 나온다.

## 17. 프로그램의 다양한 패턴들

![캡처20프로그램의다양한패턴](./images/20.PNG)
![캡처21팩토리패턴](./images/21.PNG)
다양한 패턴들 존재 















