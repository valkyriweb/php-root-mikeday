{
	"info": {
		"name": "Pangolin Demo",
		"_postman_id": "968cf9e7-e77d-d436-3904-52be16561644",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
	},
	"item": [
		{
			"name": "Get Quote",
			"request": {
				"auth": {
					"type": "basic",
					"basic": [
						{
							"key": "username",
							"value": "{{client_id}}",
							"type": "string"
						},
						{
							"key": "password",
							"value": "{{client_secret}}",
							"type": "string"
						},
						{
							"key": "saveHelperData",
							"value": false,
							"type": "boolean"
						},
						{
							"key": "showPassword",
							"value": false,
							"type": "boolean"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"type\": \"root_term\",\n\t\"cover_amount\": 100000000,\n\t\"cover_period\": \"2_years\",\n\t\"basic_income_per_month\": 2000000,\n\t\"education_status\": \"undergraduate_degree\",\n\t\"smoker\": false,\n\t\"gender\": \"male\",\n\t\"age\": 29\n}"
				},
				"url": {
					"raw": "https://sandbox.root.co.za/v1/insurance/quotes",
					"protocol": "https",
					"host": [
						"sandbox",
						"root",
						"co",
						"za"
					],
					"path": [
						"v1",
						"insurance",
						"quotes"
					]
				},
				"description": "Get Quote"
			},
			"response": []
		},
		{
			"name": "Create Policyholder",
			"request": {
				"auth": {
					"type": "basic",
					"basic": [
						{
							"key": "username",
							"value": "{{client_id}}",
							"type": "string"
						},
						{
							"key": "password",
							"value": "{{client_secret}}",
							"type": "string"
						},
						{
							"key": "saveHelperData",
							"type": "any"
						},
						{
							"key": "showPassword",
							"value": false,
							"type": "boolean"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"id\": {\n\t\t\"type\": \"id\",\n\t\t\"number\": \"8808125800084\",\n\t\t\"country\": \"ZA\"\n\t},\n\t\"first_name\": \"Erlich\",\n\t\"last_name\": \"Bachman\",\n\t\"email\": \"louw+erlich@root.co.za\"\n}"
				},
				"url": {
					"raw": "https://sandbox.root.co.za/v1/insurance/policyholders",
					"protocol": "https",
					"host": [
						"sandbox",
						"root",
						"co",
						"za"
					],
					"path": [
						"v1",
						"insurance",
						"policyholders"
					]
				}
			},
			"response": []
		},
		{
			"name": "Create Application",
			"request": {
				"auth": {
					"type": "basic",
					"basic": [
						{
							"key": "username",
							"value": "{{client_id}}",
							"type": "string"
						},
						{
							"key": "password",
							"value": "{{client_secret}}",
							"type": "string"
						},
						{
							"key": "saveHelperData",
							"type": "any"
						},
						{
							"key": "showPassword",
							"value": false,
							"type": "boolean"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"policyholder_id\": \"\",\n\t\"quote_package_id\": \"\",\n\t\"monthly_premium\": 76933\n}"
				},
				"url": {
					"raw": "https://sandbox.root.co.za/v1/insurance/applications",
					"protocol": "https",
					"host": [
						"sandbox",
						"root",
						"co",
						"za"
					],
					"path": [
						"v1",
						"insurance",
						"applications"
					]
				}
			},
			"response": []
		},
		{
			"name": "Issue Policy",
			"request": {
				"auth": {
					"type": "basic",
					"basic": [
						{
							"key": "username",
							"value": "{{client_id}}",
							"type": "string"
						},
						{
							"key": "password",
							"value": "{{client_secret}}",
							"type": "string"
						},
						{
							"key": "saveHelperData",
							"type": "any"
						},
						{
							"key": "showPassword",
							"value": false,
							"type": "boolean"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"application_id\": \"\"\n}"
				},
				"url": {
					"raw": "https://sandbox.root.co.za/v1/insurance/policies",
					"protocol": "https",
					"host": [
						"sandbox",
						"root",
						"co",
						"za"
					],
					"path": [
						"v1",
						"insurance",
						"policies"
					]
				}
			},
			"response": []
		}
	]
}