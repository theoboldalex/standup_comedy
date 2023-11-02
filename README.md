# Standup Comedy

> "It is called standup because your code is a joke" and other one-liners.
>
> -- <cite>Me</cite>

## Quickstart

### Clone the repo
`git clone https://github.com/theoboldalex/standup_comedy.git` 

### Inspect the data
`wc -l worker_bees.csv`

`head -n 1 worker_bees.csv`

`cat worker_bees.csv`

### Work through the exercises
There are a number of exercises listed in below. Solve them in any way you see fit. 
There is no wrong or right way to do this. Just use the tools you are most comfortable with, practice and pick up 
some new tools, tips and utilities along the way.

> [!WARNING]
> If you accidentally (or purposefully) bork your input file, simply generate a new one by running `make`.

## Exercises

> [!NOTE]
> From here on out we will refer to `worker_bees.csv` the "input file".

### Print the number of columns contained in the input file.
<details>
    <summary>Expand Solution</summary>

#### awk
```bash
awk -F, '{print NF; exit}' worker_bees.csv
```

#### perl
```bash
perl -F, -lane 'print scalar @F; exit' worker_bees.csv
```
#### shell
```bash
head -n 1 worker_bees.csv | tr -dc ',\n' | wc -c
```
</details>

### Which worker bee has the higest salary?
<details>
    <summary>Expand Solution</summary>

#### awk
```bash
awk -F, 'NR > 1 && $7 > max {max=$7} END{print max}' worker_bees.csv
```

</details>

### What is the total yearly salary of the worker bees based in France?
<details>
    <summary>Expand Solution</summary>

```bash
awk -F, '$6 ~ /FR/ {ts+=$7} END{print ts}' worker_bees.csv
```
</details>

### What is the job title of the oldest worker bee?
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

### Which country has the highest headcount?
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

### Print the full name and job title of all worker bees that have `fred` in their name. 
> [!IMPORTANT]
> Beware some worker bee names may not be all lower cased.
<details>
    <summary>Expand Solution</summary>

```bash
awk -F, '/[fF]red/ {print $1 " " $2 " " $5}' worker_bees.csv
```
</details>

### What is the most common job title for a worker bee?
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

### How many lead developers are there working from the US?
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

### Make a copy of the input file but convert the format from `csv` to `tsv`
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

### Make a new row of data right below the headers with your name and the job title `Scrum Mainer`
<details>
    <summary>Expand Solution</summary>

    Epstein didn't kill himself.
</details>

