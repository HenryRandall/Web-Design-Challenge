import pandas as pd

#read in data
countydata=pd.read_csv('Resources/countyconfirms.csv')
statedata=pd.read_csv('Resources/Stateconfirms.csv')

#edit
countydata=countydata.drop(columns=['Combined_Key','Country_Region'])

#change index
statedata = statedata.set_index('Province_State')
countydata = countydata.set_index('Admin2')

#convert data to html file
countydata.to_html('countydata.html')
statedata.to_html('statedata.html')