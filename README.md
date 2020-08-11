## Informações básicas
Este projeto pe um fork de [betafcc/Municipios-Brasileiros-TSE](https://github.com/betafcc/Municipios-Brasileiros-TSE) onde incluo um script sql para criação de tabela em banco de dados SQL.

# Municípios Brasileiros TSE

CSV e JSON contendo `codigo_tse | uf | nome_municipio | capital | codigo_ibge`

Inspirado em (e join-able com) [kelvins/Municipios-Brasileiros](https://github.com/kelvins/Municipios-Brasileiros)

## head(20):

codigo_tse|uf|nome_municipio|capital|codigo_ibge
---|---|---|---|---
1120|AC|ACRELÂNDIA|0|1200013
1570|AC|ASSIS BRASIL|0|1200054
1058|AC|BRASILÉIA|0|1200104
1007|AC|BUJARI|0|1200138
1015|AC|CAPIXABA|0|1200179
1074|AC|CRUZEIRO DO SUL|0|1200203
1112|AC|EPITACIOLÂNDIA|0|1200252
1139|AC|FEIJÓ|0|1200302
1104|AC|JORDÃO|0|1200328
1554|AC|MANOEL URBANO|0|1200344
1040|AC|MARECHAL THAUMATURGO|0|1200351
1090|AC|MÂNCIO LIMA|0|1200336
1511|AC|PLÁCIDO DE CASTRO|0|1200385
1023|AC|PORTO ACRE|0|1200807
1066|AC|PORTO WALTER|0|1200393
1392|AC|RIO BRANCO|1|1200401
1082|AC|RODRIGUES ALVES|0|1200427
1031|AC|SANTA ROSA DO PURUS|0|1200435
1457|AC|SENA MADUREIRA|0|1200500
1538|AC|SENADOR GUIOMARD|0|1200450

### CSV:


```csv
codigo_tse,uf,nome_municipio,capital,codigo_ibge
1120,AC,ACRELÂNDIA,0,1200013
1570,AC,ASSIS BRASIL,0,1200054
1058,AC,BRASILÉIA,0,1200104
1007,AC,BUJARI,0,1200138
1015,AC,CAPIXABA,0,1200179
1074,AC,CRUZEIRO DO SUL,0,1200203
1112,AC,EPITACIOLÂNDIA,0,1200252
1139,AC,FEIJÓ,0,1200302
1104,AC,JORDÃO,0,1200328
1554,AC,MANOEL URBANO,0,1200344
1040,AC,MARECHAL THAUMATURGO,0,1200351
1090,AC,MÂNCIO LIMA,0,1200336
1511,AC,PLÁCIDO DE CASTRO,0,1200385
1023,AC,PORTO ACRE,0,1200807
1066,AC,PORTO WALTER,0,1200393
1392,AC,RIO BRANCO,1,1200401
1082,AC,RODRIGUES ALVES,0,1200427
1031,AC,SANTA ROSA DO PURUS,0,1200435
1457,AC,SENA MADUREIRA,0,1200500

```

### JSON:

```json
[
  {
    "codigo_tse": 1120,
    "uf": "AC",
    "nome_municipio": "ACRELÂNDIA",
    "capital": 0,
    "codigo_ibge": 1200013
  },
  {
    "codigo_tse": 1570,
    "uf": "AC",
    "nome_municipio": "ASSIS BRASIL",
    "capital": 0,
    "codigo_ibge": 1200054
  },
  {
    "codigo_tse": 1058,
    "uf": "AC",
    "nome_municipio": "BRASILÉIA",
    "capital": 0,
    "codigo_ibge": 1200104
  }
]
```
