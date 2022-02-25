package main

import (
	"fmt"
)

type user_credentials struct {
	name string
	role string
	age int
}


func main() {

	//"Demonstraight user input"
	var user string
	fmt.Printf("Enter usernams to check priviliges: ")
	fmt.Scanf("%v", &user)

	//Add new employee to the system. check if both is return is equal to "true":
	if UserPrivileges(user) == exist(user) {

		fmt.Println(":: Access granted")

		lst_userCred := []string{"name", "role", "age"} 
		
		var input_data string
		for _, i := range lst_userCred {

			fmt.Printf("Enter %s: ", i)
			fmt.Scanf("%v", &input_data)
		
			//Verbose
			fmt.Printf("> %v \n", input_data)
			add_user_data(input_data)

		}
		fmt.Printf("User was created")
	
	}else {
		fmt.Println(":: Denied")
	}
}


//check privilges of the current user:
func UserPrivileges(user string) bool {
	if user == "admin" {
		return true
	}

	return false
}

//Check if user exist:
func exist(user string) bool {

	if UserPrivileges(user){
		return true
	
	}else {
		return false
	}
}

func add_user_data(input_data string){

	/*
	"create user code here with sql etc"
	...
	...
	*/
}
